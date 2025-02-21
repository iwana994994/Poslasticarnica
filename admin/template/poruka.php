<?php
include_once './config/database.php';
include_once './model/PorukaModel.php';
include_once './controler/PorukaController.php';




// Kreiramo objekat kontrolera
$controller = new PorukaController($pdo);

// Dohvatamo sve poruke
$poruke = $controller->prikaziPoruke();

// Pre nego što se prikaže tabela, proverite da li je korisnik kliknuo na link za brisanje
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $controller->obrisiPoruku($_GET['id']);  // Pozivamo funkciju da obrišemo poruku

    header("Location: admin-nav.php?page=poruka"); // Preusmeravanje na admin-nav.php sa parametrom page
    exit();
    
}
?>

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
                            <a id="dugme" href="admin-nav.php?page=poruka&action=delete&id=<?php echo $poruka['id']; ?>">Obriši</a>


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
