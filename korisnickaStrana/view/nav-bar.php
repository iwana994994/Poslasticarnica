
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/nav-bar.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/login.js"></script>

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
            <img src="/Poslasticarnica/korisnickaStrana/public/slike/logo.png">
        </a>
        <h1>Poslasticarnica</h1>
        <div class="navigation">
    <ul>
        <li><a href="/Poslasticarnica/index.php?page=pocetna">Početna</a></li>
        <li><a href="/Poslasticarnica/index.php?page=proizvodi">Proizvodi</a></li>
        <li><a href="#">Akcija</a></li>
        <li><a href="/Poslasticarnica/index.php?page=vesti">Vesti</a></li>
        <li><a href="/Poslasticarnica/index.php?page=kontakt">Kontakt</a></li>
        <li><a href="#">Korpa</a></li>
    </ul>
</div>

    </nav>

    <!-- Model za prijavu (unutar iste stranice) -->
    <div id="loginModal" >
        <div id="login-box">
            <button id="close" onclick="closeLogin()">&times;</button>
            
            <h2>Prijava</h2>


     <form id="form-login" method="POST" action="/Poslasticarnica/admin/admin-dashboard.php">
    <input type="text" name="username" placeholder="Korisničko ime" required>
    <input type="password" name="password" placeholder="Lozinka" required>
    <button id="posalji">Prijavi se</button>
       </form>

        </div>
    </div>

</body>
</html>
