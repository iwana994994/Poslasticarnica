<?php
// Uključivanje potrebnih datoteka
include_once './korisnickaStrana/config/database.php'; 
include_once './korisnickaStrana/model/ProizvodModel.php'; 
include_once './korisnickaStrana/model/LogInModel.php'; 
include_once './korisnickaStrana/model/KontaktModel.php'; 
include_once './korisnickaStrana/view/nav-bar.php'; 

//<! ------------------Pozivanje proizvodModel.php ------------------------------------------->

$proizvodModel = new ProizvodModel($pdo);
$proizvodi = $proizvodModel->prikaziProizvod(); // Svi proizvodi
$proizvod5 = $proizvodModel->prikazi5Proizvoda(); //Objekat kontrolera poziva funkciju. koja poziva modul koji ima u sebi funkciju za 5 proizvoda

//<! ------------------Pozivanje kontaktModel.php ------------------------------------------->

$kontaktModel = new KontaktModel($pdo);
$kontakt = $kontaktModel->getKontakt(); // Dohvatiti kontakt podatke
// Obrada forme za kontakt
$_error = [];
$_message = '';
if ($_POST) {
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];

    // Validacija podataka
    if ($ime && $email && $poruka) {
        if ($kontaktModel->dodajPoruku($ime, $email, $poruka)) {
            $_message = "Vaša poruka je uspešno poslata!";
            unset ($_POST['ime']);
            unset ($_POST['email']);
            unset ($_POST['poruka']);

        } else {
            $_error[] = "Greška pri slanju poruke.";
        }
    } else {
        if (!$ime) $_error[] = "Unesite ime.";
        if (!$email) $_error[] = "Unesite email.";
        if (!$poruka) $_error[] = "Unesite poruku.";
    }
}
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
