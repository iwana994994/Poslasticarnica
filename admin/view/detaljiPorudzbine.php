<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Detalji porudžbine</title>
</head>
<body>
    <h1>Detalji porudžbine #<?= $detalji[0]['porudzbina_id'] ?></h1>
    <div class="kupac">
    <h3>Podaci o kupcu:</h3>
    <p><strong>Ime:</strong> <?= $detalji[0]['ime'] ?> <?= $detalji[0]['prezime'] ?></p>
    <p><strong>Adresa:</strong> <?= $detalji[0]['adresa'] ?></p>
    <p><strong>Telefon:</strong> <?= $detalji[0]['telefon'] ?></p>
    <p><strong>Plaćanje:</strong> <?= $detalji[0]['nacin_placanja'] ?></p>
    <p><strong>Datum porudžbine:</strong> <?= $detalji[0]['datum_porudzbine'] ?></p>
</div>
<div class="detalji-porudzbine">
    <h3 >Proizvodi u ovoj porudžbini:</h3>
    <table>
        <tr>
            <th>Proizvod</th>
            <th>Količina</th>
            <th>Cena</th>
            <th>Ukupno</th>
        </tr>
        <?php 
        $ukupno = 0;
        foreach ($detalji as $stavka): 
            $stavkaUkupno = $stavka['kolicina'] * $stavka['cena'];
            $ukupno += $stavkaUkupno;
        ?>
        <tr>
            <td><?= $stavka['proizvod'] ?></td>
            <td><?= $stavka['kolicina'] ?></td>
            <td><?= number_format($stavka['cena'], 2) ?> RSD</td>
            <td><?= number_format($stavkaUkupno, 2) ?> RSD</td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="text-align:right;"><strong>Ukupno:</strong></td>
            <td><strong><?= number_format($ukupno, 2) ?> RSD</strong></td>
           
        </tr>
    </table>
</div>
    <a href="admin-dashboard.php?page=poružbina"  id="dugme">Nazad na listu</a>
</body>
</html>
