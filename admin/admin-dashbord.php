<?php

include("config/database.php"); // Uključi konekciju sa bazom
include("view/admin-nav.php"); // Uključi navigaciju za admina
include("model/ProizvodModel.php");
include_once 'model/PorukaModel.php';


//-----------------Dodavanje ProizvodController.php---------------
$controller = new ProizvodModel($pdo);
$proizvodi = $controller->prikaziProizvode();
$controller->dodajProizvod();

// Pre nego što se prikaže tabela, proverite da li je korisnik kliknuo na link za brisanje
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $controller->obrisiProizvod($_GET['id']);  // Pozivamo funkciju da obrišemo poruku

    header("Location: admin-dashbord.php?page=proizvod"); // Preusmeravanje na admin-nav.php sa parametrom page
    exit();
}
//----------------------------Dodavanje PorukaController.php---------------------------

// Kreiramo objekat kontrolera
$poruka = new PorukaModel($pdo);

// Dohvatamo sve poruke
$poruke = $poruka->prikaziPoruke();

// Pre nego što se prikaže tabela, proverite da li je korisnik kliknuo na link za brisanje
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $poruka->obrisiPoruku($_GET['id']);  // Pozivamo funkciju da obrišemo poruku

    header("Location: admin-dashbord.php?page=poruka"); // Preusmeravanje na admin-nav.php sa parametrom page
    exit();
    
}

// Uzimanje parametra 'page' iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'proizvodi'; // Podrazumevana stranica je 'proizvodi'

// Upravljačka logika za učitavanje odgovarajuće stranice
switch ($page) {
    case 'proizvodi':
        include './view/proizvod.php'; // Stranica za prikaz proizvoda
        break;
    case 'dodajProizvod':
        include './view/dodajProizvod.php'; // Stranica za dodavanje proizvoda
        break;
    case 'poruke':
        include './view/poruka.php'; // Stranica za prikaz poruka
        break;
    
       
    default:
        include './view/proizvod.php'; // Podrazumevana stranica (ako nema 'page' parametra)
        break;
}
?>
