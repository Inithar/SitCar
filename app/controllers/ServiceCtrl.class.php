<?php

    namespace app\controllers;

    use core\App;

    class ServiceCtrl{
        public function action_serviceView(){
            $this->generateView();
        }

        public function generateView() {
            App::getSmarty()->display('service_view.tpl');
        }
    }
?>