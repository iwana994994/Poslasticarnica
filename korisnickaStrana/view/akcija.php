<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $akcija['naziv'] ?> - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/akcija.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/sesion-add-product.js" defer></script>


</head>
<body id="body">

<div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=akcije">Akcije /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $akcija['naziv'] ?></li>
        </ol>
</div>
    <div class="sale-container">
        <img src="/Poslasticarnica/<?= $akcija['slika'] ?>" class="sale-img" >
        <div class="sale-info product-info">
            <h2><?= $akcija['naziv']?></h2>
            <p><?= $akcija['opis'] ?></p>
            <p><strong><?= $akcija['cena'] ?> RSD</strong></p>
            
            <div class="price-quantity">
                <input type="number" class="quantity" value="1" min="1" max="50">

                <button class="shopping2"
                        data-id="<?= $akcija['proizvod_id'] ?>"
                        data-naziv="<?= htmlspecialchars($akcija['naziv']) ?>"
                        data-cena="<?= $akcija['cena'] ?>"
                        data-slika="<?= $akcija['slika'] ?>">
                    Ubaci u korpu
                </button>

                <!-- poruka posle dugmeta -->
                <p class="cart-message" style="color:green; margin-top:10px;"></p> 
            </div>       
    </div>
</div>

    <?php include 'footer.php'; ?> 
    
</body>