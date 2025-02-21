<?php
include_once("../controler/ProizvodController.php");
include_once("../template/nav-bar.php");

$controller = new ProizvodController($pdo);
$proizvod5 = $controller->prikazi5Proizvoda(); //Objekat kontrolera poziva funkciju. koja poziva modul koji ima u sebi funkciju za 5 proizvoda
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/pocetna.css">
    <title>Document</title>
</head>
<body>
<div class="head-box">
            <h1>
                Čokoladni Shop
            </h1>
            <p>
                Zalogaj koji se pamti.
            </p>
        </div>
        <h1 id="our-product-title"> Naši proizvodi</h1>
<div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($proizvod5 as $proizvod): ?>
            <div class="product-box">
                <img src="<?= $proizvod['slika'] ?>" class="product-img"> <!-- Slika proizvoda -->
                <div class="description">
                    <h2 class="product-title"><?= ($proizvod['ime']) ?></h2> <!-- Naziv proizvoda -->
                   
                </div>
            </div>
                
        <?php endforeach; ?>
    </div>

<!-- Proizvodi na akciji -->

<h1 id="action-title"> Akcije</h1>
<div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($proizvod5 as $proizvod): ?>
            <div class="product-box">
                <img src="<?= $proizvod['slika'] ?>" class="product-img"> <!-- Slika proizvoda -->
                <div class="description">
                    <h2 class="product-title"><?= ($proizvod['ime']) ?></h2> <!-- Naziv proizvoda -->
                   
                </div>
            </div>
                
        <?php endforeach; ?>
    </div>

</body>
</html>