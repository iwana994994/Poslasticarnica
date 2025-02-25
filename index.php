<?php
// Uključivanje potrebnih datoteka
include_once './korisnickaStrana/config/database.php'; 
include_once './korisnickaStrana/controler/ProizvodController.php'; 
include_once './korisnickaStrana/controler/LogInController.php'; 
include_once './korisnickaStrana/controler/KontaktController.php'; 
include_once './korisnickaStrana/template/nav-bar.php'; 

//<! ------------------Pozivanje proizvodController.php ------------------------------------------->

$proizvodController = new ProizvodController($pdo);
$proizvodi = $proizvodController->prikaziProizvod(); // Svi proizvodi
$proizvod5 = $proizvodController->prikazi5Proizvoda(); //Objekat kontrolera poziva funkciju. koja poziva modul koji ima u sebi funkciju za 5 proizvoda

//<! ------------------Pozivanje kontaktController.php ------------------------------------------->

$kontaktController = new KontaktController($pdo);
$kontakt = $kontaktController->getKontakt(); // Dohvatiti kontakt podatke
// Obrada forme za kontakt
if ($_POST) {
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];

    if ($ime && $email && $poruka) {
        $kontaktController->dodajPoruku($ime, $email, $poruka); // Dodavanje poruke
    } else {
        echo "Molimo popunite sva polja.";
    }
}
//<! ------------------Pozivanje kontaktController.php ------------------------------------------->


// Uzimanje parametra iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna';

// Upravljačka logika
switch ($page) {
    case 'pocetna':
        include 'korisnickaStrana/template/pocetna.php';
        break;
    case 'proizvod':
        include './korisnickaStrana/template/proizvod.php'; 
        break;
    case 'kontakt':
        include './korisnickaStrana/template/kontakt.php';
        break;
    case 'login':
        include './korisnickaStrana/template/login.php';
        break;
    default:
        include './korisnickaStrana/template/pocetna.php';
        break;
}
?>
