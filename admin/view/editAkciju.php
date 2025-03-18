<?php 
include "../model/editAkcijuModel.php"; 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dodajAkciju.css">
    <link rel="stylesheet" href="../public/breadcrumb.css">
</head>
<body>
    <div>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/admin/admin-dashboard.php">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/admin/admin-dashboard.php?page=akcije">Akcije /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $akcija['naziv'] ?></li>
        </ol>
</div>

<div class="container">
    <h2 id="dodaj-akciju">Izmeni akciju</h2>
        
    <form action="../model/editAkcijutModel.php?id=<?=$akcija['id'] ?>" method="POST" enctype="multipart/form-data">
        <label for="naziv">Naziv:</label>
         <input type="text" name="naziv" value="<?= $akcija['naziv']?>">
        
        <label for="cena">Cena:</label>
        <input type="number" name="cena"  value="<?= $akcija['cena']?>">
        
        <label for="opis">Opis:</label>
        <textarea name="opis" type="text"><?= $akcija['opis'] ?></textarea>

        <label for="slika">Slika:</label>
        <input type="file" name="slika">

        <!-- Prikaz trenutne slike -->
        <?php if (!empty($akcija['slika'])): ?>
                    <div>
                        <img src="/Poslasticarnica/<?= $akcija['slika'] ?>" alt="Trenutna slika" style="max-width: 200px; max-height: 200px;">
                    </div>
                <?php endif; ?>
        
        <button type="submit" name="edit-akciju">Izmeni akciju</button>
    </form>
</div>
<div></div>
    
</body>
</html>


