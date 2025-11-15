

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
                <a href="/Poslasticarnica/index.php?page=logout">Odjavi se</a>
            <?php else: ?>
                <a href="/Poslasticarnica/index.php?page=login">Prijavi se</a>
            <?php endif; ?>
            
        <div id="search-card">
                <form method="get" 
                        action="/Poslasticarnica/pretraga"
                        accept-charset="UTF-8">
            
                    <input type="search"
                        name="q"
                        placeholder="Pretraži poslastice..."
                        value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>">

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
        <li><a href="/Poslasticarnica/">Početna</a></li>
        <li><a href="/Poslasticarnica/proizvodi">Proizvodi</a></li>
        <li><a href="/Poslasticarnica/akcije">Akcija</a></li>
        <li><a href="/Poslasticarnica/vesti">Vesti</a></li>
        <li><a href="/Poslasticarnica/usluge">Usluge</a></li>
        <li><a href="/Poslasticarnica/kontakt">Kontakt</a></li>
        <li><a href="/Poslasticarnica/korpa">Korpa</a></li>
        <li><a href="/Poslasticarnica/pretraga">Pretraga</a></li>

        
    </ul>
</div>

    </nav>

    <!-- Model za prijavu (unutar iste stranice) -->
   

</body>
</html>
