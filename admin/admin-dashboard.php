<?php
session_start();
include("config/database.php"); // Uključi konekciju sa bazom
include("view/admin-nav.php"); // Uključi navigaciju za admina
include("model/ProizvodModel.php");
include_once 'model/PorukaModel.php';
include_once 'model/VestModel.php';
include_once 'model/upravljanjeAdminimaModel.php';
include_once 'model/korisnikModel.php';
include_once 'model/pocetnaModel.php';
include "../korisnickaStrana/view/message-session.php";


// Uzimanje parametra 'page' iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna'; // Podrazumevana stranica je 'proizvodi'

// Upravljačka logika za učitavanje odgovarajuće stranice
switch ($page) {
    case 'pocetna':
        include './view/pocetna.php'; // pocetna stranica
        break;
    case 'proizvodi':
        include './view/proizvod.php'; // Stranica za prikaz proizvoda
        break;
    case 'dodajProizvod':
        include './view/dodajProizvod.php'; // Stranica za dodavanje proizvoda
        break;
    case 'poruke':
        include './view/poruka.php'; // Stranica za prikaz poruka
        break;
    case 'vesti':
            include './view/vesti.php'; //Str za prikaz vesti
            break;
    case 'dodajVest':
            include './view/dodajVest.php'; //Str za dodavanje vesti
            break;
    case 'korisnici':
                include './view/korisnik.php'; //Str za dodavanje vesti
                break;
    case 'upravljajAdminima':
                include './view/upravljanjeAdminima.php'; //Str za dodavanje vesti
                break;
    case 'dodajAdmina':
                    include './view/dodajAdmina.php'; //Str za dodavanje vesti
                    break;            
    case 'odjava':
                // Dodavanje logout logike:
                session_destroy();
                header("Location: ../index.php");
                exit();
       
    default:
        include './view/proizvod.php'; // Podrazumevana stranica (ako nema 'page' parametra)
        break;
}
?>
