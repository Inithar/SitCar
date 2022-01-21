<?php

    namespace app\controllers;

    use core\App;
    use core\Utils;
    use core\ParamUtils;
    use core\Validator;
    use app\forms\RegisterForm;

    class RegistrationCtrl{

        private $registerForm;
        private $user;
        private $salt = "alsdasd@!@#asddsasda@!@#89@#$#$@%&^%^&^asdasddsa!@^&^";

        public function __construct(){
            $this->registerForm = new RegisterForm();
        }

        public function getParams(){
            $this->registerForm->name = ParamUtils::getFromRequest('name-register');
            $this->registerForm->surname = ParamUtils::getFromRequest('surname-register');
            $this->registerForm->email = ParamUtils::getFromRequest('email-register');
            $this->registerForm->password = ParamUtils::getFromRequest('pass-register');
            $this->registerForm->password2 = ParamUtils::getFromRequest('pass-register2');
            $this->registerForm->birthday = ParamUtils::getFromRequest('birthday-register');
            $this->registerForm->phoneNumber = ParamUtils::getFromRequest('phone-number-register');
            $this->registerForm->city = ParamUtils::getFromRequest('city-register');
            $this->registerForm->postcode= ParamUtils::getFromRequest('postcode-register');
            $this->registerForm->street = ParamUtils::getFromRequest('street-register');
            $this->registerForm->buildingNumber = ParamUtils::getFromRequest('building-number-register');
            $this->registerForm->flatNumber = ParamUtils::getFromRequest('flat-number-register');
        }

        public function validate(){
            $this->getParams();

            $v = new Validator();
            $this->registerForm->name = $v->validateFromRequest("name-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Imię jest wymagane',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Imię powinno mieścić się pomiędzy 3 i 30 znakami'
            ]);

            $this->registerForm->surname = $v->validateFromRequest("surname-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Nazwisko jest wymagane',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Nazwisko powinno mieścić się pomiędzy 3 i 30 znakami'
            ]);

            $this->registerForm->email = $v->validateFromRequest("email-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Adres e-mail jest wymagany',
                'email' => true,
                'validator_message' => 'Nieprawidłowy format adresu mailowego'
            ]);

            $this->user = App::getDB()->get("użytkownik", "*", [
                "email" => $this->registerForm->email
            ]);

            if(isset($this->user['email'])){
                Utils::addErrorMessage('Adres e-mail jest już używany');
            }

            $this->registerForm->password = $v->validateFromRequest("pass-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Hasło jest wymagane'
            ]);

            $this->registerForm->password2 = $v->validateFromRequest("pass-register2", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Powtórz hasło'
            ]);

            $this->registerForm->birthday = $v->validateFromRequest("birthday-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Data urodzenia jest wymagana'
            ]);

            if($this->getAge($this->registerForm->birthday) < 18){
                Utils::addErrorMessage('Musisz mieć przynajmniej 18 lat');
            }

            $this->registerForm->phoneNumber = $v->validateFromRequest("phone-number-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Numer telefonu jest wymagany',
                'min_length' => 9,
                'max_length' => 9,
                'int' => true,
                'validator_message' => 'Niepoprawny format numeru telefonu'
            ]);

            if(!($this->registerForm->password == $this->registerForm->password2)){
                Utils::addErrorMessage('Hasła do siebie nie pasują');
            }

            $this->registerForm->city = $v->validateFromRequest("city-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Miasto jest wymagane'
            ]);

            $this->registerForm->postcode = $v->validateFromRequest("postcode-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Kod pocztowy jest wymagany',
                'min_length' => 5,
                'max_length' => 5,
                'validator_message' => 'Błędny format kodu pocztowego'
            ]);

            $this->registerForm->street = $v->validateFromRequest("street-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Nazwa ulicy jest wymagana',
                'min_length' => 3,
                'max_length' => 50,
                'validator_message' => 'Ulica powinna mieścić się pomiędzy 3 i 50 znakami'
            ]);

            $this->registerForm->buildingNumber = $v->validateFromRequest("building-number-register", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Numer budynku jest wymagany'
            ]);

            $this->registerForm->flatNumber = $v->validateFromRequest("flat-number-register", [
                'trim' => true
            ]);

            return !App::getMessages()->isError();
        }

        public function action_registerUser(){
            if($this->validate()){

                $this->registerForm->password = hash("sha512", $this->salt.$this->registerForm->password);

                try{
                    App::getDB()->insert("użytkownik", [
                        "imie" => $this->registerForm->name,
                        "nazwisko" => $this->registerForm->surname,
                        "data_urodzenia" => $this->registerForm->birthday,
                        "email" => $this->registerForm->email,
                        "hasło" => $this->registerForm->password,
                        "nr_tel" => $this->registerForm->phoneNumber,

                        "miasto" => $this->registerForm->city,
                        "kod_pocztowy" => $this->registerForm->postcode,
                        "ulica" => $this->registerForm->street,
                        "nr_budynku" => $this->registerForm->buildingNumber,
                        "nr_mieszkania" => $this->registerForm->flatNumber,
                        "data_dołączenia" => date("Y-m-d H:i:s"),
                        "data_modyfikacji" => date("Y-m-d H:i:s")
                    ]);
                }catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas dodawania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }

                $this->addRole();
                
                App::getRouter()->redirectTo("afterReg");
            } else{
                $this->generateView();
            }
        }

        public function addRole(){
            $user = App::getDB()->get("użytkownik", "*", [
                "email" => $this->registerForm->email
            ]);

            App::getDB()->update("użytkownik", [
                "zmodyfikowane_przez" => $user['idużytkownik'],
                "utworzone_przez" => $user['idużytkownik']
            ],[
                "idużytkownik" => $user['idużytkownik']
            ]);

            App::getDB()->insert("użytkownik_rola", [
                "idużytkownik" => $user['idużytkownik'],
                "idrola" => 2,
                "data_nadania" => date("Y-m-d H:i:s")
            ]);
        }

        public function getAge($date) {
            return intval(date('Y', time() - strtotime($date))) - 1970;
        }

        public function action_regView(){
            $this->generateView();
        }

        public function generateView() {
            App::getSmarty()->assign('registerForm', $this->registerForm);
            App::getSmarty()->display('registration_view.tpl');
        }
    }
?>