<?php

    namespace app\controllers;

    use core\App;
    use core\Utils;
    use core\ParamUtils;
    use core\Validator;
    use app\forms\ContactForm;

    class ContactCtrl{

        private $contactForm;

        public function __construct(){
            $this->contactForm = new ContactForm();
        }

        public function getParams(){
            $this->contactForm->name = ParamUtils::getFromRequest('contact-name');
            $this->contactForm->surname = ParamUtils::getFromRequest('contact-surname');
            $this->contactForm->email = ParamUtils::getFromRequest('contact-email');
            $this->contactForm->topic = ParamUtils::getFromRequest('contact-topic');
            $this->contactForm->message = ParamUtils::getFromRequest('contact-message');
        }

        public function validate(){
            $this->getParams();

            if (!(
                isset($this->contactForm->name) &&
                isset($this->contactForm->surname) &&
                isset($this->contactForm->email) &&
                isset($this->contactForm->topic)
            )){return false;}

            $v = new Validator();
            $this->name = $v->validateFromRequest("contact-name", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Imię jest wymagane',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Imię powinno mieścić się pomiędzy 3 i 30 znakami',
            ]);

            $this->surname = $v->validateFromRequest("contact-surname", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Nazwisko jest wymagane',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Nazwisko powinno mieścić się pomiędzy 3 i 30 znakami',
            ]);

            $this->email = $v->validateFromRequest("contact-email", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Adres e-mail jest wymagany',
                'email' => true,
                'validator_message' => 'Niepoprawny format adresu e-mail',
            ]);

            $this->topic = $v->validateFromRequest("contact-topic", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Temat jest wymagany',
                'max_length' => 100,
                'validator_message' => 'Temat nie powinien przekraczać 100 znaków',
            ]);

            $this->name = $v->validateFromRequest("contact-message", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Treść wiadomości jest wymagana',
                'min_length' => 25,
                'max_length' => 1000,
                'validator_message' => 'Treść wiadomości powinna mieścić sie pomiędzy 25 i 1000 znakami',
            ]);

            return !App::getMessages()->isError();
        }

        public function clear(){
            $this->contactForm->name = '';
            $this->contactForm->surname = '';
            $this->contactForm->email = '';
            $this->contactForm->topic = '';
            $this->contactForm->message = '';
        }

        public function action_sendMessage(){
            if ($this->validate()){
                Utils::addInfoMessage('Wiadomość została wysłana');
                $this->clear();
                $this->generateView();
            } else{
                $this->generateView();
            }
        }

        public function action_contactView(){
            $this->generateView();
        }

        public function generateView(){
            App::getSmarty()->assign('contactForm', $this->contactForm);
            App::getSmarty()->display('contact_view.tpl');
        }
    }
?>