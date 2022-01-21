<?php

    namespace app\controllers;

    use core\App;
    use core\Utils;
    use core\RoleUtils;
    use core\ParamUtils;
    use core\SessionUtils;
    use core\Validator;
    use app\forms\LoginForm;

    class LoginCtrl{
        private $form;
        private $user;
        private $userID;
        private $salt = "alsdasd@!@#asddsasda@!@#89@#$#$@%&^%^&^asdasddsa!@^&^";

		public function __construct(){
			$this->form = new LoginForm();
		}

        public function getParams(){
            $this->form->email = ParamUtils::getFromRequest('email');
            $this->form->password = ParamUtils::getFromRequest('pass');
		}

        public function validate(){
            $this->getParams();

            $v = new Validator();
            $this->form->email = $v->validateFromRequest("email", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Adres e-mail jest wymagany',
                'email' => true,
                'validator_message' => 'Nieprawidłowy format adresu mailowego',
            ]);

            $this->form->password = $v->validateFromRequest("pass", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Hasło jest wymagane',
            ]);

            try{

                $this->form->password = hash("sha512", $this->salt.$this->form->password);

                $this->user = App::getDB()->get("użytkownik", "*", [
                    "email" => $this->form->email,
                    "hasło" => $this->form->password
                ]);

                if(isset($this->user['email']) && isset($this->user['hasło'])){
                    $this->userID = $this->user['idużytkownik'];

                    $this->role = App::getDB()->get("użytkownik_rola", "*", [
                        "idużytkownik" => $this->userID,
                    ]);
                    
                    if($this->role['idrola'] == 1){
                        RoleUtils::addRole('admin');
                    } else if($this->role['idrola'] == 2){
                        RoleUtils::addRole('user');
                    }

                    SessionUtils::store('userID', $this->user['idużytkownik']);
                }else{
                    Utils::addErrorMessage('Niepoprawny email lub hasło');
                }

            }catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            return !App::getMessages()->isError();
        }

        public function action_mainLogin(){
            $this->form->whereToGo = 1;
            $this->generateView();
        }

        public function action_resView(){
            $this->form->whereToGo = 0;
            $this->generateView();
        }

        public function action_login(){
            if ($this->validate()){
                App::getRouter()->redirectTo("homeView");
            }else{
                $this->form->whereToGo = 1;
                $this->generateView();
            }
        }

        public function action_reservationLogin(){
            if($this->validate()){
                App::getRouter()->redirectTo("reservationView");
            }else{
                $this->generateView();
            }
        }

        public function action_afterReg(){
            $this->form->whereToGo = 1;
            Utils::addInfoMessage('Rejestracja zakończona pomyślnie');
            Utils::addInfoMessage('Podaj e-mail i hasło by się zalogować');
            $this->generateView();
        }

        public function action_logout() {
            session_destroy();
            App::getRouter()->redirectTo('mainLogin');
        }

        public function generateView(){
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->display('login_view.tpl');
        }
    }
?>