<?php
    use core\App;
    use core\Utils;

    App::getRouter()->setDefaultRoute('homeView');
    App::getRouter()->setLoginRoute('resView');

    Utils::addRoute('homeView', 'HomeCtrl');

    Utils::addRoute('carsView', 'CarsCtrl');
    Utils::addRoute('cityCars', 'CarsCtrl');
    Utils::addRoute('luxuriousCars', 'CarsCtrl');
    Utils::addRoute('sportCars', 'CarsCtrl');
    Utils::addRoute('utilityCars', 'CarsCtrl');
    Utils::addRoute('pagination', 'CarsCtrl');
    Utils::addRoute('deleteCar', 'CarsCtrl', ['admin']);

    Utils::addRoute('reservationView', 'ReservationCtrl', ['user','admin']);
    Utils::addRoute('summationView', 'ReservationCtrl', ['user','admin']);
    Utils::addRoute('sendReservation', 'ReservationCtrl', ['user','admin']);

    Utils::addRoute('serviceView', 'ServiceCtrl');

    Utils::addRoute('faqView', 'FaqCtrl');

    Utils::addRoute('contactView', 'ContactCtrl');
    Utils::addRoute('sendMessage', 'ContactCtrl');

    Utils::addRoute('mainLogin', 'LoginCtrl');
    Utils::addRoute('reservationLogin', 'LoginCtrl');
    Utils::addRoute('resView', 'LoginCtrl');
    Utils::addRoute('afterReg', 'LoginCtrl');
    Utils::addRoute('login', 'LoginCtrl');
    Utils::addRoute('logout', 'LoginCtrl', ['user','admin']);

    Utils::addRoute('regView', 'RegistrationCtrl');
    Utils::addRoute('registerUser', 'RegistrationCtrl');

    Utils::addRoute('transactionTableView', 'TransactionTable');
    Utils::addRoute('transactionPagination', 'TransactionTable');
?>

