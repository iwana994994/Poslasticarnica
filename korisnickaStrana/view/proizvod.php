

<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $proizvod['naziv'] ?> - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvod.css">
     <script src="/Poslasticarnica/korisnickaStrana/public/js/sesion-add-product.js"></script> 
</head>
<body>
<div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=proizvodi">Proizvodi /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $proizvod['naziv'] ?></li>
        </ol>
</div>
    <div class="product-container">
    <img src="/Poslasticarnica/<?= $proizvod['slika'] ?>" class="product-img" >
        <div class="product-info">
            <h2><?= $proizvod['naziv']?></h2>
            <p><?= $proizvod['opis'] ?></p>
            <div class="price-quantity">
                <input type="number" class="quantity" value="1" min="1" max="50">
            <p><strong><?= $proizvod['cena'] ?> RSD</strong></p>
           

            </div>
            
            
           <button class="shopping2" data-id="<?= $proizvod['id'] ?>" data-naziv="<?= $proizvod['naziv'] ?>" data-cena="<?= $proizvod['cena'] ?>" data-slika="<?= $proizvod['slika'] ?>">
                Ubaci u korpu
           </button>

    <p id="cart-message" style="color:green; margin-top:10px;"></p>
        </div>
    </div>
</body>
</html>
