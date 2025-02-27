

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
            <td><?= ($proizvod['naziv']) ?></td>
            <td><?= ($proizvod['opis']) ?></td>
            <td><?= ($proizvod['cena']) ?> RSD</td>
            <td><?= ($proizvod['zalihe']) ?></td>
            <td><img src="../public/images/<?= ($proizvod['slika']) ?>" width="50"></td>
            <td>
                <form method="POST" action="./model/delete-product.php">
                    <button id="dugme" type="submit" name="delete-product" value="<?=$proizvod['id'] ?>">Obrisi</button>
                
                </form>
            
            <a id="dugme" href="./view/editProduct.php?id=<?= $proizvod['id'] ?>">Izmeni</a>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
