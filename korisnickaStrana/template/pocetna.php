<?php
include_once __DIR__ . "/../../korisnickaStrana/controler/ProizvodController.php";
include_once __DIR__ . "/../../korisnickaStrana/template/nav-bar.php";


$controller = new ProizvodController($pdo);
$proizvod5 = $controller->prikazi5Proizvoda(); //Objekat kontrolera poziva funkciju. koja poziva modul koji ima u sebi funkciju za 5 proizvoda
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/pocetna.css">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvodi.css">

    <script src="/Poslasticarnica/korisnickaStrana/public/js/slide.js" ></script>
    <script src="/Poslasticarnica/korisnickaStrana/public/js/window-for-product-pop.js"></script>
    <title>Pocetna</title>
</head>
<body>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php foreach ($proizvod5 as $proizvod): ?>
            <div class="swiper-slide" onclick="openModal(<?= $proizvod['id'] ?>)">
                <img src="<?= $proizvod['slika']; ?>" >
                <h3><?= $proizvod['ime']; ?></h3>
                <p><?= $proizvod['opis']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

      <!-- Dugmad za navigaciju -->
      <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>

    <!-- Modal (skriven na početku) -->
<<?php foreach ($proizvod5 as $proizvod): ?>
    <div id="modal-<?= $proizvod['id'] ?>" class="window-for-product">
        <div class="modal-content">
            
            <img src="<?= $proizvod['slika'] ?>"  id="modalProductImage">
    
            <div id="product-description">
            <h2><?= ($proizvod['ime']) ?></h2>
            <p><?= ($proizvod['opis']) ?></p>
            <p><?= ($proizvod['cena']) ?> RSD</p>

            <a href="../korpa/korpa.html" class="shopping2">Ubaci u korpu</a>
            </div>
            <span class="close" onclick="closeModal(<?= $proizvod['id'] ?>)">&times;</span>
            
            
        </div>
    </div>
<?php endforeach; ?>

    <!-- dugme KUPI-->
    <a href="proizvod.php">
    <button id="buy-button">Kupi</button>
</a>


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