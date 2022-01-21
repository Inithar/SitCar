<?php

    namespace app\controllers;

    use core\App;

    class HomeCtrl{
        public function action_homeView(){
            $this->generateView();
        }

        public function generateView() {
            App::getSmarty()->display('home_view.tpl');
        }
    }
?>