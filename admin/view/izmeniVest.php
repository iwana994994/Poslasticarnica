<html>
<head>
    <title>Izmeni vest</title>
</head>
<body>
    <h2>Izmeni vest</h2>
        <input type="hidden" name="id" value="<?= $vest['id'] ?>">
        
        <label>Naziv:</label>
        <input type="text" name="naziv" value="<?= $vest['naziv'] ?>" required><br>

        <label>Opis:</label>
        <textarea name="opis" required><?= $vest['opis'] ?></textarea><br>

        <label>Slika:</label>
        <input type="file" name="slika"><br>
        <input type="hidden" name="stara_slika" value="<?= $vest['slika'] ?>">

        <button type="submit" name="editVest">Sačuvaj izmene</button>
</body>
</html>
