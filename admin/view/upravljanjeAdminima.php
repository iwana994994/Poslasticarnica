<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> 
    <title>Admini</title>
</head>
<body>
    <h1>Lista admina</h1>
    <a id="dodajProizvod" href="admin-dashboard.php?page=dodajAdmina">Dodaj novog admina</a>
    <table>
        <tr>
            <th>id</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>e-mail</th>
            <th>username</th>
            <th>password</th>
            <th> </th>
        </tr>
        <tr>
            <?php foreach($admini as $admin): ?>
            <td><?= $admin['id']?></td>
            <td><?= $admin['ime']?></td>
            <td><?= $admin['prezime']?></td>
            <td><?= $admin['email']?></td>
            <td><?= $admin['username']?></td>
            <td><?= $admin['password']?></td>

            <td>
               
                <form method="POST" action="./model/deleteAdminModel.php" id="deleteForm<?=$admin['id']?>">
                 <input type="hidden" name="delete-admin" value="<?=$admin['id']?>">
                 <button type="button" onclick="deletePop(<?=$admin['id']?> )" id="dugme">Obriši</button>
            </form>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>

 <!-- Popup prozor za brisanje admina -->
   
 <?php foreach ($admini as $admin): ?>
    <div id="deletePopup<?=$admin['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete admina?</p>
            <button type="submit"  onclick="confirmPopup(<?=$admin['id']?>)">Da</button>
            <button onclick="closePopup(<?=$admin['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>