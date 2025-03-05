
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./public/admin-nav.css">
    <link rel="stylesheet" href="./public/message-session.css">
</head>
<body id="body-nav">
    <div class="admin-container">
        <aside class="sidebar">
            <h2 id="admin-title">Admin Panel</h2>
            <ul>
            <li><a href="admin-dashboard.php?page=proizvodi">Proizvodi</a></li>
                <li><a href="admin-dashboard.php?page=dodajProizvod">Dodaj Proizvod</a></li>
                <li><a href="admin-dashboard.php?page=poruke">Poruke</a></li>
                <li><a href="admin-dashboard.php?page=vesti">Vesti</a></li>
                <li><a href="admin-dashboard.php?page=dodajVest">Dodaj vest</a></li>   
                <li><a href="admin-dashboard.php?page=korisnici">Korisnici</a></li>
                <li><a href="admin-dashboard.php?page=odjava">Odjava</a></li>
                
               
            </ul>
        </aside>

        <!-- Glavni sadržaj -->
        <main class="main-content">
            <?php
            // Uzimanje parametra iz URL-a
            $page = isset($_GET['page']) ? $_GET['page'] : '';?>