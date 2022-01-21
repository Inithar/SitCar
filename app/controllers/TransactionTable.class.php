<?php

    namespace app\controllers;

    use core\App;
    use core\Utils;
    use core\ParamUtils;

    class TransactionTable{

        private $records;
        private $pageNumber;
        private $pageID;
        private $startFrom;
        private $recordPerPage = 22; 
        private $totalRecords;

        public function getRecords(){
            try{
                $this->records = App::getDB()->select("tranzakcja", [
                        "idtranzakcja",
                        "data_rozpoczęcia",
                        "data_zakończenia",
                        "cena_auta_dzień",
                        "wybór_usługi",
                        "koszt_całkowity",
                        "użytkownik_id",
                        "adres_dostawy_id",
                        "samochód_id"
                    ]);
            } catch (\PDOException $e){
                getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
                if (getConf()->debug) getMessages()->addError($e->getMessage());	
            }
        }

        public function action_transactionPagination(){
            $this->pageNumber = ParamUtils::getFromRequest('transactionPageNumber');

            $this->pageID = substr("$this->pageNumber", -1);

            $this->startFrom = ($this->pageID - 1) * $this->recordPerPage;  

            try{
                $this->records = App::getDB()->select("tranzakcja", "*", [
                    'LIMIT' => [$this->startFrom, $this->recordPerPage]
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            $this->generatePageTransaction();
        }

        public function pageBox(){
            try{
                $this->totalRecords = App::getDB()->count("tranzakcja",[
                    "idtranzakcja[>=]" => 0
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            $this->totalPages = ceil($this->totalRecords / $this->recordPerPage);
        }

        public function generatePageTransaction(){
            $this->getViewParm();
            App::getSmarty()->display('transactionTableList.tpl');
        }

        public function action_transactionTableView(){
            try{
                $this->records = App::getDB()->select("tranzakcja", "*", [
                    'LIMIT' => [0, $this->recordPerPage]
                ]);
            } catch (\PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            $this->generateView();
        }

        public function getViewParm(){
            $this->pageBox();
            App::getSmarty()->assign('max', $this->totalPages);
            App::getSmarty()->assign('records', $this->records);
        }

        public function generateView() {
            $this->getViewParm();
            $this->getRecords();
            App::getSmarty()->display('transactionTable.tpl');
        }
    }
?>