<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Lista porudžbina</title>
</head>
<body>
    <h1>Lista porudžbina</h1>

    <?php if (empty($porudzbine)): ?>
        <p style="text-align:center;">📭 Trenutno nema porudžbina.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Ime i Prezime</th>
                <th>Adresa</th>
                <th>Telefon</th>

                <th>Datum</th>
                <th>Detalji</th>
            </tr>

            <?php foreach ($porudzbine as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= htmlspecialchars($p['ime'] . ' ' . $p['prezime']) ?></td>
                    <td><?= htmlspecialchars($p['adresa']) ?></td>
                    <td><?= htmlspecialchars($p['telefon']) ?></td>
                   

                    <td><?= $p['datum_porudzbine'] ?></td>
                    <td> <a href="admin-dashboard.php?page=detaljiPorudzbine&id=<?= $p['id'] ?>" id="dugme">Detalji</a>
                       
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>