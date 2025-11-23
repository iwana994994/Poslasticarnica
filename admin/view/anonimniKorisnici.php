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
    <title>Lista anonimnih korisnika</title>
</head>
<body>
    <h1>Lista anonimnih korisnika</h1>
    
 <table>
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Adresa</th>
            <th>Telefon</th>
            <th>Datum porudžbine</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($anonimni)): ?>
            <?php foreach ($anonimni as $anoniman): ?>
                <tr>
                    <td><?= htmlspecialchars($anoniman['ime']) ?></td>
                    <td><?= htmlspecialchars($anoniman['prezime']) ?></td>
                    <td><?= htmlspecialchars($anoniman['email']) ?></td>
                    <td><?= htmlspecialchars($anoniman['adresa']) ?></td>
                    <td><?= htmlspecialchars($anoniman['telefon']) ?></td>
                    <td><?= $anoniman['datum_porudzbine'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nema anonimnih korisnika.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
    
</body>
</html>
