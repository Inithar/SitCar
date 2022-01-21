<?php

    namespace app\controllers;

    use core\App;
    use core\ParamUtils;
    use core\Validator;
    use core\Utils;
    use core\SessionUtils;
    use app\forms\ReservationForm;

    class ReservationCtrl{

        private $reservationForm;
        private $services;
        private $carID; 
        private $totalCost;
        private $car;
        private $startDate;
        private $endDate;

        public function __construct(){
            $this->reservationForm = new ReservationForm();
        }

        public function getParams(){
            $this->reservationForm->startDateReservation = ParamUtils::getFromRequest('start-date-reservation');
            $this->reservationForm->endDateReservation = ParamUtils::getFromRequest('end-date-reservation');
            $this->reservationForm->serviceReservation = ParamUtils::getFromRequest('service-reservation');
            $this->reservationForm->cityReservation = ParamUtils::getFromRequest('city-reservation');
            $this->reservationForm->postcodeReservation = ParamUtils::getFromRequest('postcode-reservation');
            $this->reservationForm->streetReservation = ParamUtils::getFromRequest('street-reservation');
            $this->reservationForm->buildingNumberReservation = ParamUtils::getFromRequest('building-number-reservation');
            $this->reservationForm->flatNumberReservation = ParamUtils::getFromRequest('flat-number-reservation');
        }

        public function getService(){
            try{
                $this->services = App::getDB()->select("usługa", [
                        "usługa1",
                        "usługa2",
                        "usługa3",
                        "usługa4",
                        "usługa5",
                        "usługa6",
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        public function getServiceCost($service){
            if($service == 'Krótkoterminowy wynajem'){
                return 0;
            }else if($service == 'Długoterminowy wynajem'){
                return 0;
            }else if($service == 'Samochód na lotnisko'){
                return 0;
            }else if($service == 'Samochód do ślubu (+500 zł / dzień)'){
                return 500;
            }else if($service == 'Samochód z kierowcą (+300 zł / dzień)'){
                return 300;
            }else if($service == 'Samochód z ochroną (+600 zł / dzień)'){
                return 600;
            }else{
                return 0; 
            }
        }

        public function validate(){
            $this->getParams();

            $v = new Validator();
            $this->reservationForm->startDateReservation = $v->validateFromRequest("start-date-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Data odbioru jest wymagana',
            ]);

            if($this->dayBefore($this->reservationForm->startDateReservation) < 24){
                Utils::addErrorMessage('Rezerwację należy złożyć minimum 24 godziny wcześniej');
            }

            $this->reservationForm->endDateReservation = $v->validateFromRequest("end-date-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Data zwrotu jest wymagana',
            ]);

            $this->reservationForm->serviceReservation = $v->validateFromRequest("service-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Typ usługi jest wymagany',
            ]);

            
            $this->reservationForm->cityReservation = $v->validateFromRequest("city-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Miasto jest wymagane',
            ]);

            $this->reservationForm->postcodeReservation = $v->validateFromRequest("postcode-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Kod pocztowy jest wymagany',
                'min_length' => 5,
                'max_length' => 5,
                'validator_message' => 'Błędny format kodu pocztowego',
            ]);

            $this->reservationForm->streetReservation = $v->validateFromRequest("street-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Nazwa ulicy jest wymagana',
                'min_length' => 3,
                'max_length' => 50,
                'validator_message' => 'Ulica powinna mieścić się pomiędzy 3 i 50 znakami',
            ]);

            $this->reservationForm->buildingNumberReservation = $v->validateFromRequest("building-number-reservation", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Numer budynku jest wymagany',
            ]);

            $this->reservationForm->flatNumberReservation = $v->validateFromRequest("flat-number-reservation", [
                'trim' => true,
            ]);

            return !App::getMessages()->isError();
        }

        public function dayBefore($date) {
            return  intval((strtotime($date) - time()) / 3600);  
        }

        public function rentalPeriod($startDate, $endDate){
            return ceil((strtotime($endDate) - strtotime($startDate)) / 86400);
        }

        public function getCar(){
            return App::getDB()->get("samochód", "*", [
                "idsamochód" => SessionUtils::load('carID', true)
            ]);
        }

        public function countPrice(){
            $this->car = $this->getCar();
            return $this->rentalPeriod($this->reservationForm->startDateReservation, $this->reservationForm->endDateReservation) * $this->car['cena_za_dzień'] + $this->rentalPeriod($this->reservationForm->startDateReservation, $this->reservationForm->endDateReservation) * $this->getServiceCost($this->reservationForm->serviceReservation);
        }

        public function action_sendReservation(){
            if($this->validate()){
                try{
                    App::getDB()->insert("adres_dostawy", [
                        "miasto" => $this->reservationForm->cityReservation,
                        "kod_pocztowy" => $this->reservationForm->postcodeReservation,
                        "ulica" => $this->reservationForm->streetReservation,
                        "nr_budynku" => $this->reservationForm->buildingNumberReservation,
                        "nr_mieszkania" => $this->reservationForm->flatNumberReservation
                    ]);
                }catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas dodawania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
    
                $this->reservationForm->adressID = App::getDB()->id();

                $this->reservationForm->userID = SessionUtils::load('userID', true);

                $this->car = $this->getCar();

                $this->totalCost = $this->countPrice();

                try{
                    App::getDB()->insert("tranzakcja", [
                        "data_rozpoczęcia" => $this->reservationForm->startDateReservation,
                        "data_zakończenia" => $this->reservationForm->endDateReservation,
                        "adres_dostawy_id" => $this->reservationForm->adressID,
                        "wybór_usługi" => $this->reservationForm->serviceReservation,
                        "użytkownik_id" => $this->reservationForm->userID,
    
                        "cena_auta_dzień" => $this->car['cena_za_dzień'],
                        "koszt_całkowity" => $this->totalCost,
                        "samochód_id" => $this->car['idsamochód']
                    ]);
                }catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas dodawania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
    
                $this->generateParamsView();
                App::getSmarty()->display('home_view.tpl');
            }
        }

        public function action_summationView(){
            if($this->validate()){
                $this->generateParamsView();
                $this->totalCost = $this->countPrice();

                App::getSmarty()->assign('totalCost', $this->totalCost);
                App::getSmarty()->display('summation_view.tpl');
            }else{
                $this->generateView();
            }
        }

        public function action_reservationView(){
            $this->reservationForm->carID = ParamUtils::getFromPost('carID');
            SessionUtils::store('carID', $this->reservationForm->carID);
            $this->generateView();
        }

        public function generateParamsView(){
            $this->getService();
            App::getSmarty()->assign('reservationForm', $this->reservationForm);
            App::getSmarty()->assign('services', $this->services);
            App::getSmarty()->assign('totalCost', $this->totalCost);
        }

        public function generateView() {
            $this->generateParamsView();
            App::getSmarty()->display('reservation_view.tpl');
        }
    }
?>