<?php

    namespace app\controllers;

    use core\App;

    class FaqCtrl{
        public function action_faqView(){
            $this->generateView();
        }

        public function generateView() {
            App::getSmarty()->display('faq_view.tpl');
        }
    }
?>