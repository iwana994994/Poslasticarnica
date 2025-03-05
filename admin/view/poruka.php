<?php include "message-session.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/table-style.css">
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
            <?php if (!empty($poruke)): ?>
                <?php foreach ($poruke as $poruka): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($poruka['id']); ?></td>
                        <td><?php echo htmlspecialchars($poruka['ime']); ?></td>
                        <td><?php echo htmlspecialchars($poruka['email']); ?></td>
                        <td><?php echo htmlspecialchars($poruka['poruka']); ?></td>
                        <td><?php echo htmlspecialchars($poruka['datum']); ?></td>
                        <td>
                            <form method="POST" action="../model/PorukaModel.php">
                                <button type="submit" name="delete-message" value="<?php echo htmlspecialchars($poruka['id']); ?>">Obriši</button>
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

            <!-- Dodala sam message-session.php
             Uklonila visak zagrada i dodala opet htmlspecialchars zbog sigurnosti
             Ubacila sam !empty($poruke) da bi vise odgovaralo samom ponasanju-->