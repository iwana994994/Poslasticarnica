
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/table-style.css">
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
                             <form method="POST" action="./model/delete-product.php">
                         <button id="dugme" type="submit" name="delete-message" value="<?=$poruka['id'] ?>">Obrisi</button>
                
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
</body>
</html>
