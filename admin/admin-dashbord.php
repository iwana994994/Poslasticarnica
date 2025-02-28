<?php
session_start();
include("config/database.php"); // Uključi konekciju sa bazom
include("view/admin-nav.php"); // Uključi navigaciju za admina
include("model/ProizvodModel.php");
include_once 'model/PorukaModel.php';
include "../korisnickaStrana/view/message-session.php";


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
