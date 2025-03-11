<?php
include_once("../model/UslugeModel.php");
include_once './nav-bar.php';
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $usluga['naziv'] ?> - Poslastičarnica</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/usluge.css">
</head>
<body>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=usluge">Usluge/</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $usluga['naziv'] ?></li>
        </ol>
        </div>
    <div class="service-container">
        <img src="/Poslasticarnica/<?= $usluga['slika'] ?>" class="service-img">
        <div class="service-info">
            <h2><?= $usluga['naziv'] ?></h2>
            <p><?= $usluga['opis'] ?></p>
        </div>
    </div>
</body>
</html>
<?php include_once './footer.php';?>