<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/akcije.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/window-for-product-pop.js"></script> 
    <script src="/Poslasticarnica/korisnickaStrana/public/js/session-add-product.js"></script>
    <title>Poslastičarnica</title>
</head>
<body>
<section>
    <h1 id="naslov">Akcije</h1>

    <div class="container"> 
        <?php foreach ($akcije as $akcija): ?>
            <div class="sale-box">
                <a href="index.php?page=akcija&id=<?= $akcija['id'] ?>">
                    <img src="<?= $akcija['slika'] ?>" class="sale-img">
                    <div class="description">
                        <h2 class="sale-title"><?= htmlspecialchars($akcija['naziv']) ?></h2>
                        <h3 class="sale-price"><?= htmlspecialchars($akcija['cena']) ?> RSD</h3>
                    </div>
                </a>

                <!-- količina -->
                <input type="number" class="quantity" value="1" min="1" max="50">

                <!-- dugme za JS -->
                <button class="shopping2"
                        data-id="<?= $akcija['proizvod_id'] ?>" 
                        data-naziv="<?= htmlspecialchars($akcija['naziv']) ?>"
                        data-cena="<?= $akcija['cena'] ?>"
                        data-slika="<?= $akcija['slika'] ?>">
                    Ubaci u korpu
                </button>

                <!-- OVO je poruka koju JS puni -->
                <p class="cart-message" style="color:green; margin-top:5px;"></p>
            </div>               
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>
