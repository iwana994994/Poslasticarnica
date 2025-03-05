<?php include "message-session.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/dodajVest.css">
    <link rel="stylesheet" href="./public/message-session.css">
    <title>Dodaj vest</title>
</head>
<body>
<div class="container">
    <h2 id="dodajVest">Dodaj novu vest</h2>
    <?php if (isset($_SESSION['message'])): ?>
        <p class="<?php echo strpos($_SESSION['message'], 'uspešno') !== false ? 'success' : 'error'; ?>">
            <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
        </p>
    <?php endif; ?>
    <form action="./model/dodajVestModel.php" method="POST">
        <label for="naziv">Naziv:</label>
        <input type="text" name="naziv" required>
        
        <label for="opis">Opis:</label>
        <textarea name="opis" required></textarea>
        
        <label for="slika">Slika (unesite naziv fajla, npr. 'novost1.jpg'):</label>
        <input type="text" name="slika" placeholder="npr. novost1.jpg">
        
        <button type="submit" name="addVest">Dodaj vest</button>
    </form>
</div>
</body>
</html>