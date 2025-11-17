
<?php
// nav-bar.php
// (pretpostavka: session_start() je već pozvan u index.php)

$q_nav = isset($_GET['q']) ? $_GET['q'] : '';
?>

<link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/nav-bar.css">
<link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/footer.css">

<header id="site-header">

    <div class="search">
        <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] == true): ?>
            <a href="/Poslasticarnica/index.php?page=logout">Odjavi se</a>
        <?php else: ?>
            <a href="/Poslasticarnica/index.php?page=login">Prijavi se</a>
        <?php endif; ?>

        <!-- GORNJI SEARCH (kao i do sada) -->
        <div id="search-card">
            <form method="get" action="/Poslasticarnica/index.php" accept-charset="UTF-8">
               <input type="hidden" name="page" value="pretraga">

                <input type="search"
                       name="q"
                       placeholder="Pretraži poslastice..."
                       value="<?= htmlspecialchars($q_nav) ?>">
                <button type="submit">Traži</button>
            </form>
        </div>

    </div>

    <nav>
        <a href="/Poslasticarnica/">
            <img src="/Poslasticarnica/korisnickaStrana/public/slike/Poslastičarnica_logo.png"
                 alt="Logo Poslastičarnica">
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
            </ul>
        </div>
    </nav>

</header>

