<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> 
    <title>Lista usluga</title>
</head>
<body>
    <h1>Lista usluga</h1>
    <a id="dodajUslugu" href="admin-dashboard.php?page=dodajUslugu">Dodaj novu uslugu</a>
    <table >
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Slika</th>
            <th></th>
        </tr>
        <?php foreach ($usluge as $usluga): ?>
        <tr>
            <td><?= ($usluga['id']) ?></td>
            <td><?= ($usluga['naziv']) ?></td>
            <td><?= ($usluga['opis']) ?></td>
            <td><img src="/Poslasticarnica/<?=$usluga['slika'] ?>" alt="proizvod"></td>
            <td>
                <form method="POST" action="./model/delete-uslugu.php" id="deleteForm<?=$usluga['id']?>">
                    <input type="hidden" name="delete-uslugu" value="<?=$usluga['id']?>">
                    <button type="button" onclick="deletePop(<?=$usluga['id']?> )" id="dugme">Obriši</button>
                </form>
                <a id="dugme" href="/Poslasticarnica/admin/view/editUslugu.php?id=<?= $usluga['id'] ?>">Izmeni</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Popup za brisanje usluge -->
   
    <?php foreach ($usluge as $usluga): ?>
    <div id="deletePopup<?=$usluga['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete ovu uslugu?</p>
            <button type="submit"  onclick="confirmPopup(<?=$usluga['id']?>)">Da</button>
            <button onclick="closePopup(<?=$usluga['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>
</body>
</html>
