<?php
include_once("../model/UslugeModel.php");
include_once './nav-bar.php';
$usluga = getUsluge($con, isset($_GET["id"]) ? $_GET["id"] : null);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($usluga['naziv']) ?> - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/usluge.css">
</head>
<body>
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
        <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=usluge">Usluge /</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($usluga['naziv']) ?></li>
    </ol>
</div>
<div class="product-container">
    <img src="/Poslasticarnica/<?= htmlspecialchars($usluga['slika']) ?>" class="services-img" alt="<?= htmlspecialchars($usluga['naziv']) ?>">
    <div class="services-info">
        <h2><?= htmlspecialchars($usluga['naziv']) ?></h2>
        <p><?= htmlspecialchars($usluga['opis']) ?></p>
    </div>
</div>
</body>
</html>
<?php include_once './footer.php';?>