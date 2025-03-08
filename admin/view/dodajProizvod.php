<?php 
include "message-session.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/dodajProizvod.css">
    <link rel="stylesheet" href="./public/message-session.css">
    <title>Dodaj proizvod</title>
</head>
<body>
<div class="container">
    <h2 id="dodaj-proizod">Dodaj novi proizvod</h2>
    <form action="./model/dodajProizvodModel.php" method="POST" enctype="multipart/form-data">
        <label for="naziv">Naziv:</label>
        <input type="text" name="naziv" >
        
        <label for="cena">Cena:</label>
        <input type="number" name="cena" >
        
        <label for="opis">Opis:</label>
        <textarea name="opis"></textarea>

        <label for="slika">Slika:</label>
        <input type="file" name="slika" >
       
        
        <button type="submit" name="add-product">Dodaj proizvod</button>
    </form>
</div>
<div></div>
    
</body>
</html>


