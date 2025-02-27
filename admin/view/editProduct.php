<?php 

include "../model/editProductModel.php"; // Uključi model

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dodajProizvod.css">
    
    
    <title>Izmeni proizvod</title>
</head>
<body>
<div class="container">
    <h2 id="dodaj-proizod">Izmeni proizvod</h2>
        

    <form action="#" method="POST">
        <label for="naziv">Naziv:</label>
         <input type="text" name="naziv" value="<?= $product['naziv']?>">
        
        <label for="cena">Cena:</label>
        <input type="number" name="cena"  value="<?= $product['cena']?>">
        
        <label for="opis">Opis:</label>
        <textarea name="opis" type="text"><?= $product['opis'] ?></textarea>

        
       
        
        <button type="submit" name="edit-product">Izmeni proizvod</button>
    </form>
</div>
<div></div>
    
</body>
</html>


