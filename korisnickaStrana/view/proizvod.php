<?php include_once("../model/ProizvodModel.php");
include_once './nav-bar.php';
?>

<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $proizvod['naziv'] ?> - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvod.css">
</head>
<body>
<div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=proizvodi">Proizvodi /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $proizvod['naziv'] ?></li>
        </ol>
</div>
    <div class="product-container">
    <img src="/Poslasticarnica/<?= $proizvod['slika'] ?>" class="product-img" >
        <div class="product-info">
            <h2><?= $proizvod['naziv']?></h2>
            <p><?= $proizvod['opis'] ?></p>
            <p><strong><?= $proizvod['cena'] ?> RSD</strong></p>
            <a href="../korpa/korpa.html" class="shopping2">Ubaci u korpu</a>
        </div>
    </div>
</body>
</html>
