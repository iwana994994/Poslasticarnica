<?php 

include "../model/editProductModel.php"; 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dodajProizvod.css">
    <link rel="stylesheet" href="../public/breadcrumb.css">
</head>
<body>
    <div>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/admin/admin-dashboard.php">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/admin/admin-dashboard.php?page=proizvodi">Proizvodi /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $product['naziv'] ?></li>
        </ol>
</div>
<div class="container">
    <h2 id="dodaj-proizod">Izmeni proizvod</h2>
        

    <form action="../model/editProductModel.php?id=<?= $product['id'] ?>" method="POST" enctype="multipart/form-data">
                <label for="naziv">Naziv:</label>
                <input type="text" name="naziv" value="<?= $product['naziv']?>">
                
                <label for="cena">Cena:</label>
                <input type="number" name="cena" value="<?= $product['cena']?>">
                
                <label for="opis">Opis:</label>
                <textarea name="opis" type="text"><?= $product['opis'] ?></textarea>

                <label for="slika">Slika:</label>
                <input type="file" name="slika">
                
                <!-- Prikaz trenutne slike -->
                <?php if (!empty($product['slika'])): ?>
                    <div>
                        <img src="/Poslasticarnica/<?= $product['slika'] ?>" alt="Trenutna slika" style="max-width: 200px; max-height: 200px;">
                    </div>
                <?php endif; ?>
                <button type="submit" name="edit-product">Izmeni proizvod</button>

                </form>
</div>
<div></div>
    
</body>
</html>


