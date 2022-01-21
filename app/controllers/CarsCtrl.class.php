<?php

    namespace app\controllers;

    use core\App;
    use core\Utils;
    use core\ParamUtils;

    class CarsCtrl{

        private $cars;
        private $where;
        private $searchParams = [];
        private $recordPerPage = 7;
        private $startFrom;  
        private $totalRecords; 
        private $totalPages;
        private $pageNumber; 
        private $pageID;
        private $pageBoxVisible = 0; 
        private $userRole;
        private $carID;

        public function carList(){
            try{
                $this->cars = App::getDB()->select("samochód", "*", $this->where);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            $this->pageBoxVisible = -1; 
        }

        public function action_cityCars(){
            $this->searchParams['typ_samochodu[~]'] = 'Miejski';
            $this->where = &$this->searchParams;
            $this->where ["ORDER"] = "typ_samochodu";
            $this->generatePartListCar();
        } 

        public function action_luxuriousCars(){
            $this->searchParams['typ_samochodu[~]'] = 'Luksusowy';
            $this->where = &$this->searchParams;
            $this->where ["ORDER"] = "typ_samochodu";
            $this->generatePartListCar();
        }  

        public function action_sportCars(){
            $this->searchParams['typ_samochodu[~]'] = 'Sportowy';
            $this->where = &$this->searchParams;
            $this->where ["ORDER"] = "typ_samochodu";
            $this->generatePartListCar();
        }    

        public function action_utilityCars(){
            $this->searchParams['typ_samochodu[~]'] = 'Użytkowy';
            $this->where = &$this->searchParams;
            $this->where ["ORDER"] = "typ_samochodu";
            $this->generatePartListCar();
        }    

        public function action_pagination(){
            $this->pageNumber = ParamUtils::getFromRequest('pageNumber');

            $this->pageID = substr("$this->pageNumber", -1);

            $this->startFrom = ($this->pageID - 1) * $this->recordPerPage;  

            try{
                $this->cars = App::getDB()->select("samochód", "*", [
                    'LIMIT' => [$this->startFrom, $this->recordPerPage]
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            
            $this->generatePageListCar();
        }

        public function action_deleteCar(){
            $this->carID = ParamUtils::getFromPost('carID');

            try {
                App::getDB()->delete("samochód", [
                    "idsamochód" => $this->carID
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            $this->action_carsView(); 
        }

        public function pageBox(){
            try{
                $this->totalRecords = App::getDB()->count("samochód",[
                    "idsamochód[>=]" => 0
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            $this->totalPages = ceil($this->totalRecords / $this->recordPerPage);
        }

        public function action_carsView(){
            try{
                $this->cars = App::getDB()->select("samochód", "*", [
                    'LIMIT' => [0, $this->recordPerPage]
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            
            $this->generateView();
        }

        public function generateView(){
            $this->pageBox();
            $this->getViewParm();
            App::getSmarty()->display('cars_view.tpl');
        }

        public function getViewParm(){
            App::getSmarty()->assign('visible', $this->pageBoxVisible);
            App::getSmarty()->assign('max', $this->totalPages);
            App::getSmarty()->assign('car', $this->cars);
        }

        public function generatePageListCar(){
            $this->pageBox();
            $this->getViewParm();
            App::getSmarty()->display('cars_list_view.tpl');
        }

        public function generatePartListCar(){
            $this->carList();
            $this->getViewParm();
            App::getSmarty()->display('cars_list_view.tpl');
        }
    }
?>