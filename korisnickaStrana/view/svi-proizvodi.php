
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvodi.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/window-for-product-pop.js"></script>
    <script src="/Poslasticarnica/korisnickaStrana/public/js/sesion-add-product.js"></script>
    <title>Cake-Coffee Shop</title>
</head>
<body>
    
<section>
    <h1 id="naslov">Čokoladne torte</h1>
    <div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($proizvodi as $proizvod): ?>
            <div class="product-box">
          
            <a href="index.php?page=proizvod&id=<?= $proizvod['id'] ?>">
                
                <img src="<?= $proizvod['slika'] ?>" class="product-img"> <!-- Slika proizvoda -->
                <div class="description" >
                    <h2 class="product-title"><?= ($proizvod['naziv']) ?></h2> <!-- Naziv proizvoda -->
                    <h3 class="product-price"><?= ($proizvod['cena']) ?> RSD</h3> <!-- Cena proizvoda -->
                </div>
                </a>
                <input type="number" class="quantity" value="1" min="1" max="50">
                <button class="shopping2" data-id="<?= $proizvod['id'] ?>" data-naziv="<?= $proizvod['naziv'] ?>" data-cena="<?= $proizvod['cena'] ?>" data-slika="<?= $proizvod['slika'] ?>">
                Ubaci u korpu
           </button>
            <p class="cart-message" style="color:green; margin-top:5px;"></p>
            </div>
        <?php endforeach; ?>
    </div>





</body>
</html>

