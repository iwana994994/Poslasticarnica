
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvodi.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/window-for-product-pop.js"></script>
    <title>Cake-Coffee Shop</title>
</head>
<body>
    
<section>
    <h1 id="naslov">Čokoladne torte</h1>
    <div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($proizvodi as $proizvod): ?>
            <div class="product-box" onclick="openModal(<?= $proizvod['id'] ?>)">
                <img src="<?= $proizvod['slika'] ?>" class="product-img"> <!-- Slika proizvoda -->
                <div class="description" >
                    <h2 class="product-title"><?= ($proizvod['naziv']) ?></h2> <!-- Naziv proizvoda -->
                    <h3 class="product-price"><?= ($proizvod['cena']) ?> RSD</h3> <!-- Cena proizvoda -->
                </div>
                <input type="number" class="quantity" value="1">
                <a href="../korpa/korpa.html" class="shopping">Ubaci u korpu</a>
            </div>
        <?php endforeach; ?>
    </div>

<!-- Modal (skriven na početku) -->
<<?php foreach ($proizvodi as $proizvod): ?>
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


</section>
</body>
</html>

