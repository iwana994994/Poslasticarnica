<?php
include "../model/editVestModel.php";
if (!isset($vest)) die("Greška: Vest nije učitana.");
?>

<html>
<head>
    <title>Izmeni vest</title>
    <link rel="stylesheet" href="../public/dodajVest.css">
</head>
<body>
<div class="container">
        <h2 id="dodajVest">Izmeni vest</h2>
        <form method="POST" action="../model/editVestModel.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
            
            <label>Naziv:</label>
            <input type="text" name="naziv" value="<?php echo htmlspecialchars($vest['naziv']); ?>" required><br>

            <label>Opis:</label>
            <textarea name="opis" required><?php echo htmlspecialchars($vest['opis']); ?></textarea><br>

            <label>Slika:</label>
            <input type="file" name="slika"><br>
            <input type="hidden" name="stara_slika" value="<?php echo htmlspecialchars($vest['slika']); ?>">

            <button type="submit" name="editVest">Sačuvaj izmene</button>
        </form>
    </div>
</body>
</html>