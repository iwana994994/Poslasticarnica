<?php

include_once __DIR__ . '/../controler/KontaktController.php';
include_once __DIR__ . '/nav-bar.php';

$controller= new KontaktController($pdo);
$kontakt= $controller -> getKontakt();



if ($_POST) {
    // Uzimanje podataka iz forme
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];

    if ($ime && $email && $poruka) {
        $controller->dodajPoruku($ime, $email, $poruka);
    } else {
        
        echo "Molimo popunite sva polja.";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/kontakt.css">
    <title>Kontakt</title>
</head>
<body class="heder">
<div class="head-box">
<h1>
    Kontakt
</h1>            
</div>
<div class="contact">
<div class="information">

<h2>Elektronska adresa:</h2>
<ul>
    <li><p>E-mail: <?=$kontakt['email'] ?></p></li>
    <li><p>Tel:<?= $kontakt['telefon'] ?></p></li>
    
</ul>  

<h2>Adresa:</h2>
    <ul>
        <li><?=$kontakt['adresa'] ?></li>
    </ul>

</div>

<div class="form">
<form method="POST" action="">
    <label for="ime">Ime:</label>
    <input type="text" id="ime" name="ime" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="poruka">Poruka:</label>
    <textarea id="poruka" name="poruka" required></textarea><br>

    <button>Pošaljite</button>
   


</form>


</div>
</div>

<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.4016650072194!2d21.895193530499874!3d43.31837630177418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0b16f291241%3A0x5d4587d453cb8630!2z0KPQvdC40LLQtdGA0LfQuNGC0LXRgiDQodC40L3Qs9C40LTRg9C90YPQvA!5e0!3m2!1ssr!2srs!4v1703006833440!5m2!1ssr!2srs" 
width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>


    
</body>
</html>

