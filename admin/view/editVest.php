<?php 
include "../model/editVestModel.php"; // Uključivanje modela

if (!isset($vest)) die("Greška: Vest nije učitana.");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dodajVest.css">
    <link rel="stylesheet" href="../public/message-session.css">
    
    
    <title>Izmeni vest</title>
</head>
<body>
<div class="container">
    <h2 id="dodajVest">Izmeni vest</h2>
    <?php if (isset($_SESSION['message'])): ?>
        <p class="<?php echo strpos($_SESSION['message'], 'uspešno') !== false ? 'success' : 'error'; ?>">
            <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
        </p>
    <?php endif; ?>
    <form action="../model/editVestModel.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
        <label for="naziv">Naziv:</label>
        <input type="text" name="naziv" value="<?php echo htmlspecialchars($vest['naziv']); ?>" required>
        
        <label for="opis">Opis:</label>
        <textarea name="opis" required><?php echo htmlspecialchars($vest['opis']); ?></textarea>
        
        <button type="submit" name="editVest">Izmeni vest</button>
    </form>
</div>
</body>
</html>