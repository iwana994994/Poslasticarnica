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
        

    <form action="#" method="POST">
        <label for="naziv">Naziv:</label>
         <input type="text" name="naziv" value="<?= $product['naziv']?>">
        
        <label for="cena">Cena:</label>
        <input type="number" name="cena"  value="<?= $product['cena']?>">
        
        <label for="opis">Opis:</label>
        <textarea name="opis" type="text"><?= $product['opis'] ?></textarea>

        <label for="slika">Slika:</label>
        <input type="file">
        
        <button type="submit" name="edit-product">Izmeni proizvod</button>
    </form>
</div>
<div></div>
    
</body>
</html>


