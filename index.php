<?php
// Uključivanje potrebnih datoteka
include_once './korisnickaStrana/config/database.php'; // Povezivanje sa bazom
include_once './korisnickaStrana/controler/ProizvodController.php'; // Kontroler za proizvode
include_once './korisnickaStrana/controler/LogInController.php'; // Kontroler za prijavu
include_once './korisnickaStrana/template/nav-bar.php'; // Navigacija



// Uzimanje parametra iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna'; // Podrazumevana stranica

// Upravljačka logika
switch ($page) {
    case 'pocetna':
        include 'korisnickaStrana/template/pocetna.php'; // Prikaz početne stranice
        break;
    case 'proizvod':
        include './korisnickaStrana/template/proizvod.php'; // Prikaz proizvoda
        break;
    case 'kontakt':
        include './korisnickaStrana/template/kontakt.php'; // Prikaz kontakt stranice
        break;
    case 'login':
        include './korisnickaStrana/template/login.php'; // Prikaz login stranice
        break;
    default:
        include './korisnickaStrana/template/pocetna.php'; // Ako stranica nije pronađena, prikaz početne
        break;
}
?>