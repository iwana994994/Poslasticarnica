<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../public/admin-nav.css">
    <link rel="stylesheet" href="../public/message-session.css">
</head>
<body id="body-nav">
    <div class="admin-container">
        <aside class="sidebar">
            <h2 id="admin-title">Admin Panel</h2>
            <ul>
            <li><a href="admin-dashboard.php?page=proizvodi">Proizvodi</a></li>
                <li><a href="admin-dashboard.php?page=dodajProizvod">Dodaj Proizvod</a></li>
                <li><a href="admin-dashboard.php?page=poruke">Poruke</a></li>
                <li><a href="admin-dashboard.php?page=korisnici">Korisnici</a></li>
                <li><a href="admin-dashboard.php?page=vesti">Vesti</a></li>   
                <li><a href="admin-dashboard.php?page=dodajVest">Dodaj Vest</a></li>
                <li><a href="admin-dashboard.php?page=odjava">Odjava</a></li>
               
            </ul>
        </aside>

        <!-- Glavni sadržaj --> 
        <!-- Uzimanje parametara iz URL-a DOPUNJENO -->
        <main class="main-content"> 
            <?php
            include "../korisnickaStrana/view/message-session.php"; //Prikaz poruka
            $page = isset($_GET['page']) ? $_GET['page'] : 'proizvodi';
            switch ($page) {
                case 'proizvodi':
                    include '../model/ProizvodModel.php';
                    include './view/proizvod.php';
                    break;
                case 'dodajProizvod':
                    include './view/dodajProizvod.php';
                    break;
                case 'poruke':
                    include '../model/PorukaModel.php';
                    include './view/poruka.php';
                    break;
                case 'vesti':
                    include '../model/VestModel.php';
                    include './view/vesti.php';
                    break;
                case 'dodajVest':
                    include './view/dodajVest.php';
                    break;
                case 'odjava':
                    // Dodavanje logout logike:
                    session_destroy();
                    header("Location: ../index.php");
                    exit();
                default:
                    include '../model/ProizvodModel.php';
                    include './view/proizvod.php';
                    break;
                }
                ?>
            </main>
        </div>
    </body>
    </html>