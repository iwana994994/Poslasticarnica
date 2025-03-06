<?php

// Uključivanje potrebnih datoteka
include_once './korisnickaStrana/config/database.php'; 
include_once './korisnickaStrana/model/ProizvodModel.php'; 
include_once './korisnickaStrana/model/LogInModel.php'; 
include_once './korisnickaStrana/model/KontaktModel.php'; 
include_once './korisnickaStrana/model/VestiModel.php'; 

include_once './korisnickaStrana/view/nav-bar.php'; 

include_once './korisnickaStrana/view/footer.php';
include_once './korisnickaStrana/view/message-session.php';


//<! ------------------Pozivanje loginModel.php ------------------------------------------->



// Uzimanje parametra iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna';

// Upravljačka logika
switch ($page) {
    case 'pocetna':
        include 'korisnickaStrana/view/pocetna.php';
        break;
    case 'proizvodi':
        include './korisnickaStrana/view/svi-proizvodi.php'; 
        break;
    case 'kontakt':
        include './korisnickaStrana/view/kontakt.php';
        break;
    case 'usluge':
        include './korisnickaStrana/view/usluge.php';
        break;
    case 'vesti':
        include './korisnickaStrana/view/vesti.php';
        break;
    case 'login':
        include './korisnickaStrana/view/login.php';
        break;
    case 'registracija':
        include './korisnickaStrana/view/registracija.php';
        break;
    default:
        include './korisnickaStrana/view/pocetna.php';
        break;
}

?>
