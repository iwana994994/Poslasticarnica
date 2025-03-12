<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/akcije.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/window-for-product-pop.js"></script> 
    <title>Poslastičarnica</title>
</head>
<body>
    <section>
        <h1 id="naslov">Akcije</h1>
        <div class="container"> 
            <?php foreach ($akcije as $akcija): ?>
                <div class="sale-box">
                <a href="index.php?page=akcija&id=<?= $akcija['id'] ?>">
                
                <img src="<?= $akcija['slika'] ?>" class="sale-img"> <!-- Slika proizvoda -->
                <div class="description" >
                    <h2 class="sale-title"><?= ($akcija['naziv']) ?></h2> <!-- Naziv proizvoda -->
                    <h3 class="sale-price"><?= ($akcija['cena']) ?> RSD</h3> <!-- Cena proizvoda -->
                </div>
                <input type="number" class="quantity" value="1">
                <a href="../korpa/korpa.html" class="shopping">Ubaci u korpu</a>
            </div>
        <?php endforeach; ?>
    </div>
