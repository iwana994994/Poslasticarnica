<?php

// Uključivanje potrebnih datoteka
include_once './korisnickaStrana/config/database.php'; 
include_once './korisnickaStrana/model/ProizvodModel.php'; 
include_once './korisnickaStrana/model/LogInModel.php'; 
include_once './korisnickaStrana/model/KontaktModel.php'; 
include_once './korisnickaStrana/view/nav-bar.php'; 
include_once './korisnickaStrana/view/message-session.php';


//<! ------------------Pozivanje loginModel.php ------------------------------------------->
if (isset($_POST['username']) && isset($_POST['password'])) {
    $loginModel = new LoginModel($pdo);
    $loginModel->login($_POST['username'], $_POST['password']);
}



// Uzimanje parametra iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna';

// Upravljačka logika
switch ($page) {
    case 'pocetna':
        include 'korisnickaStrana/view/pocetna.php';
        break;
    case 'proizvod':
        include './korisnickaStrana/view/proizvod.php'; 
        break;
    case 'kontakt':
        include './korisnickaStrana/view/kontakt.php';
        break;
    case 'login':
        include './korisnickaStrana/view/login.php';
        break;
    default:
        include './korisnickaStrana/view/pocetna.php';
        break;
}
?>
