
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/nav-bar.css">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/footer.css">


    <title>Cake-Coffee Shop</title>
</head>
<body id="body">
   
    <div class="search">
              
    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] == true): ?>
            <!-- Ako je korisnik prijavljen, prikaži dugme "Odjavi se" -->
            <a href="/Poslasticarnica/korisnickaStrana/view/logout.php">Odjavi se</a>
        <?php else: ?>
            <!-- Ako nije prijavljen, prikaži dugme "Prijavi se" -->
            <a href="/Poslasticarnica/index.php?page=login">Prijavi se</a>
        <?php endif; ?>
            
        <div id="search-card">
            <form method="get">
                <input type="search">
                <button type="submit">Traži</button>   
            </form>
        </div>
    </div>
    <nav>
        <a href="#">
            <img src="/Poslasticarnica/korisnickaStrana/public/slike/Poslastičarnica_logo.png">
        </a>
        <h1>Poslasticarnica</h1>
        <div class="navigation">
    <ul>
        <li><a href="/Poslasticarnica/index.php?page=pocetna">Početna</a></li>
        <li><a href="/Poslasticarnica/index.php?page=proizvodi">Proizvodi</a></li>
        <li><a href="#">Akcija</a></li>
        <li><a href="/Poslasticarnica/index.php?page=vesti">Vesti</a></li>
        <li><a href="/Poslasticarnica/index.php?page=usluge">Usluge</a></li>
        <li><a href="/Poslasticarnica/index.php?page=kontakt">Kontakt</a></li>
        <li><a href="#">Korpa</a></li>
    </ul>
</div>

    </nav>

    <!-- Model za prijavu (unutar iste stranice) -->
   

</body>
</html>
