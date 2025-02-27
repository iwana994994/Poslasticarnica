<?php

include_once(__DIR__ ."/../view/message-session.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/kontakt.css">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/message-session.css">
    <title>Kontakt</title>
</head>
<body class="heder">
<div class="head-box">
<h1 class="title">
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
    <form method="POST" action="/Poslasticarnica/korisnickaStrana/model/KontaktModel.php">
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" value="<?= $_POST['ime'] ?? '' ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>" ><br>

        <label for="poruka">Poruka:</label>
        <textarea id="poruka" name="poruka"><?= $_POST['poruka'] ?? '' ?></textarea><br>

        <button type="submit" name="send-message">Pošaljite</button>
    </form>

</div>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.793494751808!2d21.893549375681275!3d43.31858217400939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0b16bb40e6f%3A0x260b304907f25fb0!2z0J3QuNC60L7Qu9C1INCf0LDRiNC40ZvQsCAyOCwg0J3QuNGIIDcwMDE4Mw!5e0!3m2!1ssr!2srs!4v1740655733292!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

</iframe>

    
</body>
</html>

