<?php 
include "../model/editVestModel.php"; // Uključivanje modela
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dodajVest.css">
    <link rel="stylesheet" href="../public/breadcrumb.css">
</head>

<body>
<div>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/admin/admin-dashboard.php">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/admin/admin-dashboard.php?page=vesti">Vesti /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $vest['naziv'] ?></li>
        </ol>
</div>

<div class="container">
    <h2 id="dodaj-vest">Izmeni vest</h2>
        

    <form action="../model/editVestModel.php?id=<?= $vest['id'] ?>" method="POST" enctype="multipart/form-data">
        <label for="naziv">Naziv:</label>
         <input type="text" name="naziv" value="<?= $vest['naziv']?>">
        
        <label for="opis">Opis:</label>
        <textarea name="opis" type="text"><?= $vest['opis'] ?></textarea>

        <label for="slika">Slika:</label>
        <input type="file" name="slika">

           <!-- Prikaz trenutne slike -->
           <?php if (!empty($vest['slika'])): ?>
                    <div>
                        <img src="/Poslasticarnica/<?=$vest['slika'] ?>" alt="Trenutna slika" style="max-width: 200px; max-height: 200px;">
                    </div>
                <?php endif; ?>
        
        <button type="submit" name="edit-vest">Izmeni vest</button>
    </form>
</div>
<div></div>
    
</body>
</html>