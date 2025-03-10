<?php 
include "message-session.php";
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">

    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> 
    <link rel="stylesheet" href="./public/message-session.css">
    <title>Lista korisnika</title>
</head>
<body>
    <h1>Lista korisnika</h1>
    
    <table >
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>e-mail</th>
            <th>username</th>
            <th>Datum kreiranja naloga</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php foreach ($korisnici as $korisnik): ?>
        <tr>
            <td><?=($korisnik['id']) ?></td>
            <td><?= ($korisnik['ime']) ?></td>
            <td><?= ($korisnik['prezime']) ?></td>
            <td><?= ($korisnik['email']) ?> </td>
            <td><?= ($korisnik['username']) ?> </td>
            <td><?= ($korisnik['created_at']) ?></td>
            <td>
            <form method="POST" action="./model/korisnikModel.php" id="deleteForm<?=$korisnik['id']?>">
                 <input type="hidden" name="delete-product" value="<?=$korisnik['id']?>">
                 <button type="button" onclick="deletePop(<?=$korisnik['id']?> )" id="dugme">Obriši</button>
            </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
     <!-- Popup prozor za brisanje korisnika -->
   
     <?php foreach ($korisnici as $korisnik): ?>
    <div id="deletePopup<?=$korisnik['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete korisnika?</p>
            <button type="submit"  onclick="confirmPopup(<?=$korisnik['id']?>)">Da</button>
            <button onclick="closePopup(<?=$korisnik['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>
</body>
</html>
