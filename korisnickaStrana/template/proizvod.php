<?php
include_once("../config/database.php");
include_once("../model/ProizvodModel.php");
include_once("../controler/ProizvodController.php");
include_once("../template/nav-bar.php");


$controller = new ProizvodController($pdo);
$proizvodi = $controller->prikaziProizvod();  // Poziva metodu za sve proizvode
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../public/proizvodi.css">
    <title>Cake-Coffee Shop</title>
</head>
<body>
    
<section>
    <h1 id="naslov">Čokoladne torte</h1>
    <div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($proizvodi as $proizvod): ?>
            <div class="product-box">
                <img src="<?= $proizvod['slika'] ?>" class="product-img"> <!-- Slika proizvoda -->
                <div class="description">
                    <h2 class="product-title"><?= htmlspecialchars($proizvod['ime']) ?></h2> <!-- Naziv proizvoda -->
                    <h3 class="product-price"><?= htmlspecialchars($proizvod['cena']) ?> RSD</h3> <!-- Cena proizvoda -->
                </div>
                <input type="number" class="quantity" value="1">
                <a href="../korpa/korpa.html" class="shopping">Ubaci u korpu</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>
