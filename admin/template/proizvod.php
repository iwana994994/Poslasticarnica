<?php
include_once("./config/database.php");

include_once("./model/ProizvodModel.php");
include_once("./controler/ProizvodController.php");

$controller = new ProizvodController($pdo);
$proizvodi = $controller->prikaziProizvode();

// Pre nego što se prikaže tabela, proverite da li je korisnik kliknuo na link za brisanje
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $controller->obrisiProizvod($_GET['id']);  // Pozivamo funkciju da obrišemo poruku

    header("Location: admin-nav.php?page=proizvod"); // Preusmeravanje na admin-nav.php sa parametrom page
    exit();
}


?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Lista proizvoda</title>
</head>
<body>
    <h1>Lista proizvoda</h1>
    <a id="dodajProizvod" href="admin-nav.php?page=dodajProizvod">Dodaj novi proizvod</a>
    <table >
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Zalihe</th>
            <th>Slika</th>
            <th>Akcije</th>
        </tr>
        <?php foreach ($proizvodi as $proizvod): ?>
        <tr>
            <td><?=($proizvod['id']) ?></td>
            <td><?= ($proizvod['ime']) ?></td>
            <td><?= ($proizvod['opis']) ?></td>
            <td><?= ($proizvod['cena']) ?> RSD</td>
            <td><?= ($proizvod['zalihe']) ?></td>
            <td><img src="../public/images/<?= htmlspecialchars($proizvod['slika']) ?>" width="50"></td>
            <td>
            <a id="dugme" href="admin-nav.php?page=proizvod&action=delete&id=<?php echo $proizvod['id']; ?>">Obriši</a>
            <a id="dugme" href="#">Izmeni</a>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
