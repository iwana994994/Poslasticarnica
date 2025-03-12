<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $akcija['naziv'] ?> - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/akcija.css">
</head>
<body>
<div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=akcije">Akcije /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $akcija['naziv'] ?></li>
        </ol>
</div>
    <div class="sale-container">
    <img src="/Poslasticarnica/<?= $akcija['slika'] ?>" class="sale-img" >
        <div class="sale-info">
            <h2><?= $akcija['naziv']?></h2>
            <p><?= $akcija['opis'] ?></p>
            <p><strong><?= $akcija['cena'] ?> RSD</strong></p>
            <a href="../korpa/korpa.html" class="shopping2">Ubaci u korpu</a>
        </div>
    </div>
</body>