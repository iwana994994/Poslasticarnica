<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> 
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
            <th></th>
        </tr>
        <?php foreach ($vesti as $vest): ?>
        <tr>
            <td><?= ($vest['id']) ?></td>
            <td><?= ($vest['naziv']) ?></td>
            <td><?= ($vest['opis']) ?></td>
            <td><img src="/Poslasticarnica/<?=$vest['slika'] ?>" alt="proizvod"></td>
            <td>
                <form method="POST" action="./model/delete-vest.php" id="deleteForm<?=$vest['id']?>">
                    <input type="hidden" name="delete-vest" value="<?=$vest['id']?>">
                    <button type="button" onclick="deletePop(<?=$vest['id']?> )" id="dugme">Obriši</button>
                </form>
                <a id="dugme" href="/Poslasticarnica/admin/view/editVest.php?id=<?= $vest['id'] ?>">Izmeni</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Popup za brisanje vesti -->
   
    <?php foreach ($vesti as $vest): ?>
    <div id="deletePopup<?=$vest['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete ovu vest?</p>
            <button type="submit"  onclick="confirmPopup(<?=$vest['id']?>)">Da</button>
            <button onclick="closePopup(<?=$vest['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>
</body>
</html>
