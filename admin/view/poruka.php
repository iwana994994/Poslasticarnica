<?php 
include "message-session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/delete-pop.js"></script> 
    <link rel="stylesheet" href="./public/message-session.css">
    <title>Admin Panel</title>
</head>
<body id="body-poruka">
  
    <h1>Admin Panel - Prikaz poruka</h1>

    <!-- Prikazivanje poruka u tabeli -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Email</th>
                <th>Poruka</th>
                <th>Datum</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($poruke): ?>
                <?php foreach ($poruke as $poruka): ?>
                    <tr>
                        <td><?php echo $poruka['id']; ?></td>
                        <td><?php echo ($poruka['ime']); ?></td>
                        <td><?php echo ($poruka['email']); ?></td>
                        <td><?php echo (($poruka['poruka'])); ?></td>
                        <td><?php echo $poruka['datum']; ?></td>
                        <td>
                            <!-- Opcija za brisanje poruke -->
                             
                         <form method="POST" action="./model/PorukaModel.php" id="deleteForm<?=$poruka['id']?>">
                 <input type="hidden" name="delete-product" value="<?=$poruka['id']?>">
                 <button type="button" onclick="deletePop(<?=$poruka['id']?> )" id="dugme">Obriši</button>
            </form>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Nema poruka</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Popup prozor za brisanje poruka -->
   
    <?php foreach ($poruke as $poruka): ?>
    <div id="deletePopup<?=$poruka['id']?>" class="popup" >
        <div class="popup-content">
            <p>Da li ste sigurni da želite da obrišete ovaj proizvod?</p>
            <button type="submit"  onclick="confirmPopup(<?=$poruka['id']?>)">Da</button>
            <button onclick="closePopup(<?=$poruka['id']?>)">Ne</button>
        </div>
    </div>
<?php endforeach; ?>
</body>
</html>
