<?php
include_once("../controler/LogInController.php");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/nav-bar.css">
    <script src="../public/js/login.js"></script>

    <title>Cake-Coffee Shop</title>
</head>
<body id="body">
   
    <div class="search">
        
            <button onclick="openLogin()">Prijavi se</button> <!-- Otvori modal za login -->
            
        <div id="search-card">
            <form method="get">
                <input type="search">
                <button type="submit">Traži</button>   
            </form>
        </div>
    </div>
    <nav>
        <a href="#">
            <img src="../public/slike/logo.png">
        </a>
        <div class="navigation">
            <ul>
                <li><a href="pocetna.php">Početna</a></li>
                <li><a href="proizvod.php">Proizvodi</a></li>
                <li><a href="#">Akcija</a></li>
                <li><a href="#">Vesti</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="#">Korpa</a></li>
            </ul>
        </div>
    </nav>

    <!-- Modal za prijavu (sada unutar iste stranice) -->
    <div id="loginModal" >
        <div id="login-box">
            <button id="close" onclick="closeLogin()">&times;</button>
            
            <h2>Prijava</h2>


     <form id="form-login" method="POST" action="../controler/loginController.php">
    <input type="text" name="username" placeholder="Korisničko ime" required>
    <input type="password" name="password" placeholder="Lozinka" required>
    <button id="posalji" type="submit">Prijavi se</button>
       </form>

        </div>
    </div>

</body>
</html>
