<?php include_once("../model/UslugeModel.php");
include_once './nav-bar.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $usluga['naziv'] ?> - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/usluge.css">
</head>
<body>
<div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=usluge">Usluge /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $usluga['naziv'] ?></li>
        </ol>
</div>
    <div class="product-container">
    <img src="/Poslasticarnica/<?= $usluga['slika'] ?>" class="services-img" >
        <div class="services-info">
            <h2><?= $usluga['naziv']?></h2>
            <p><?= $usluga['opis'] ?></p>
            
        </div>
    </div>
</body>
</html>