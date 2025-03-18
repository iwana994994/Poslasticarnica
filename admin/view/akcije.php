<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> 
    <title>Lista akcija</title>
</head>
<body>
    <h1>Lista akcija</h1>
    <a id="dodajAkciju" href="admin-dashboard.php?page=dodajAkciju">Dodaj novu akciju</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Slika</th>
            <th></th>

        </tr>
        <?php foreach ($akcije as $akcija): ?>
        <tr>
            <td><?=($akcija['id']) ?></td>
            <td><?= ($akcija['naziv']) ?></td>
            <td><?= ($akcija['opis']) ?></td>
            <td><?= ($akcija['cena']) ?> RSD</td>
            <td><img src="/Poslasticarnica/<?=$akcija['slika'] ?>" alt="proizvod"></td>
            <td>
            <form method="POST" action="./model/delete-akciju.php" id="deleteForm<?=$akcija['id']?>">
                 <input type="hidden" name="delete-akciju" value="<?=$akcija['id']?>">
                 <button type="button" onclick="deletePop(<?=$akcija['id']?> )" id="dugme">Obriši</button>
            </form>
                <a id="dugme" href="/Poslasticarnica/admin/view/editAkciju.php?id=<?= $akcija['id'] ?>">Izmeni</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Popup prozor za brisanje akcija -->
   
    <?php foreach ($akcije as $akcija): ?>
    <div id="deletePopup<?=$akcija['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete ovu akciju?</p>
            <button type="submit"  onclick="confirmPopup(<?=$akcija['id']?>)">Da</button>
            <button onclick="closePopup(<?=$akcija['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>
