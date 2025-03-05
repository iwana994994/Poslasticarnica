<?php
session_start();
include("config/database.php"); // Uključi konekciju sa bazom
include("view/admin-nav.php"); // Uključi navigaciju za admina
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <?php
    // Uzimanje parametra 'page' iz URL-a
    $page = isset($_GET['page']) ? $_GET['page'] : 'proizvodi';

    // Upravljačka logika za učitavanje odgovarajuće stranice
    switch ($page) {
        case 'proizvodi':
            include '../model/ProizvodModel.php';
            include './view/proizvod.php'; //Stranica za prikaz proizvoda
            break;
        case 'dodajProizvod':
            include './view/dodajProizvod.php'; //Stranica za dodavanje proizvoda
            break;
        case 'poruke':
            include '../model/PorukaModel.php';
            include './view/poruka.php'; // Stranica za prikaz poruka
            break;
        case 'vesti':
            include '../model/VestModel.php';
            include './view/vesti.php'; //Str za prikaz vesti
            break;
        case 'dodajVest':
            include './view/dodajVest.php'; //Str za dodavanje vesti
            break;
        case 'odjava':
            session_destroy();
            header("Location: ../index.php");
            exit();
        default:
            include '../model/ProizvodModel.php';
            include './view/proizvod.php'; //Podraumevana stranica (ako nema 'page' parametra)
            break;
    }
    ?>
</body>
</html>







