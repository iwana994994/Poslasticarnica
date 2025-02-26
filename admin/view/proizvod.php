

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Lista proizvoda</title>
</head>
<body>
    <h1>Lista proizvoda</h1>
    <a id="dodajProizvod" href="admin-dashbord.php?page=dodajProizvod">Dodaj novi proizvod</a>
    <table >
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Zalihe</th>
            <th>Slika</th>
            <th>Akcije</th>
        </tr>
        <?php foreach ($proizvodi as $proizvod): ?>
        <tr>
            <td><?=($proizvod['id']) ?></td>
            <td><?= ($proizvod['ime']) ?></td>
            <td><?= ($proizvod['opis']) ?></td>
            <td><?= ($proizvod['cena']) ?> RSD</td>
            <td><?= ($proizvod['zalihe']) ?></td>
            <td><img src="../public/images/<?= ($proizvod['slika']) ?>" width="50"></td>
            <td>
            <a id="dugme" href="admin-dashbord.php?page=proizvod&action=delete&id=<?php echo $proizvod['id']; ?>">Obriši</a>
            <a id="dugme" href="#">Izmeni</a>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
