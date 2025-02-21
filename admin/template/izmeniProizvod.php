<?php

include_once("../controler/ProizvodController.php");

$controller = new ProizvodController($pdo);



?>

<html>
<head>
    <title>Izmeni proizvod</title>
</head>
<body>
    <h2>Izmeni proizvod</h2>
    <form method="POST" action="../controler/ProizvodController.php" >
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
</body>
</html>
