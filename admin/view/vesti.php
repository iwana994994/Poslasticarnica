

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Lista vesti</title>
</head>
<body>
    <h1>Lista vesti</h1>
    <a id="dodajVest" href="admin-dashboard.php?page=dodajVest">Dodaj novu Vest</a>
    <table >
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Slika</th>
            <th>Akcije</th>
        </tr>
        <?php foreach ($vesti as $vest): ?>
        <tr>
            <td><?= htmlspecialchars($vest['id']) ?></td>
            <td><?= htmlspecialchars($vest['naziv']) ?></td>
            <td><?= htmlspecialchars($vest['opis']) ?></td>
            <td><img src="../public/slike/<?= htmlspecialchars($vest['slika']) ?>"></td>
            <td>
                <form method="POST" action="../model/obrisiVestModel.php">
                    <button  id="dugme" type="submit" name="obrisiVest" value="<?= htmlspecialchars($vest['id']) ?>">Obriši</button>
                </form>
                <a id="dugme" href="editVest.php?id=<?= htmlspecialchars($vest['id']) ?>">Izmeni</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
