<?php 
include_once("./controler/ProizvodController.php");


$controller = new ProizvodController($pdo);
$controller->dodajProizvod();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/dodajProizvod.css">
    <title>Dodaj proizvod</title>
</head>
<body>
<div class="container">
    <h2 id="dodaj-proizod">Dodaj novi proizvod</h2>
    <form action="../controler/ProizvodController.php" method="POST">
        <label for="naziv">Naziv:</label>
        <input type="text" name="naziv" required>
        
        <label for="cena">Cena:</label>
        <input type="number" name="cena" required>
        
        <label for="opis">Opis:</label>
        <textarea name="opis" required></textarea>
        
        <label for="slika">Slika:</label>
        <input type="file" name="slika">
        
        <button type="submit">Dodaj proizvod</button>
    </form>
</div>
    
</body>
</html>


