<?php 
include "../model/editVestModel.php"; // Uključivanje modela

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dodajVest.css">
    
    
    <title>Izmeni vest</title>
</head>
<body>
<div class="container">
    <h2 id="dodaj-vest">Izmeni vest</h2>
        

    <form action="#" method="POST">
        <label for="naziv">Naziv:</label>
         <input type="text" name="naziv" value="<?= $vest['naziv']?>">
        
        <label for="opis">Opis:</label>
        <textarea name="opis" type="text"><?= $vest['opis'] ?></textarea>

        <label for="slika">Slika:</label>
        <input type="file">
        
        <button type="submit" name="edit-vest">Izmeni vest</button>
    </form>
</div>
<div></div>
    
