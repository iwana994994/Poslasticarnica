<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> <!-- Povezivanje JS fajla -->
    <title>Lista proizvoda</title>
</head>
<body>
    <h1>Lista proizvoda</h1>
    <a id="dodajProizvod" href="admin-dashboard.php?page=dodajProizvod">Dodaj novi proizvod</a>
    <table>
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
            <form method="POST" action="./model/delete-product.php" id="deleteForm<?=$proizvod['id']?>">
                 <input type="hidden" name="delete-product" value="<?=$proizvod['id']?>">
                 <button type="button" onclick="deletePop(<?=$proizvod['id']?> )" id="dugme">Obriši</button>
            </form>
                <a id="dugme" href="./view/editProduct.php?id=<?= $proizvod['id'] ?>">Izmeni</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Popup prozor za brisanje proizvoda -->
   
    <?php foreach ($proizvodi as $proizvod): ?>
    <div id="deletePopup<?=$proizvod['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete ovaj proizvod?</p>
            <button type="submit"  onclick="confirmPopup(<?=$proizvod['id']?>)">Da</button>
            <button onclick="closePopup(<?=$proizvod['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>
