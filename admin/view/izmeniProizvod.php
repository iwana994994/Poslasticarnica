<?php
include_once("../model/editProductModel.php"); // Temporary fallback
if (!isset($product)) die("Greška: Proizvod nije učitan.");
?>

<html>
<head>
    <title>Izmeni proizvod</title>
    <link rel="stylesheet" href="../public/dodajProizvod.css">
</head>
<body>
    <div class="container">
        <h2 id="dodaj-proizvod">Izmeni proizvod</h2>
        <form method="POST" action="../model/editProductModel.php" enctype="multipart/form-data">  
            <input type="hidden" name="id" value="<?= $proizvod['id'] ?>">
        
            <label>Naziv:</label>
            <input type="text" name="naziv" value="<?= $proizvod['naziv'] ?>" required><br>

            <label>Cena:</label>
            <input type="text" name="cena" value="<?= $proizvod['cena'] ?>" required><br>

            <label>Opis:</label>
            <textarea name="opis" required><?= $proizvod['opis'] ?></textarea><br>

            <label>Slika:</label>
            <input type="file" name="slika"><br>
            <input type="hidden" name="stara_slika" value="<?= $proizvod['slika'] ?>">

            <button type="submit" name="editProizvod">Sačuvaj izmene</button>
        </form>
    </div>
</body>
</html>
