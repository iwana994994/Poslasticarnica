<?php
session_start();
include_once(__DIR__ . "/../config/database.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $kolicina = isset($_POST['kolicina']) ? (int)$_POST['kolicina'] : 1;

    // Uzmemo podatke o proizvodu iz baze
    $query = "SELECT * FROM proizvod WHERE id='$product_id'";
    $result = mysqli_query($con, $query);
    $proizvod = mysqli_fetch_assoc($result);

    if (!$proizvod) {
        echo json_encode(["success" => false, "message" => "Proizvod nije pronađen."]);
        exit;
    }

    // Dodajemo proizvod u sesiju (korpu)
    if (!isset($_SESSION['korpa'])) {
        $_SESSION['korpa'] = [];
    }

    if (isset($_SESSION['korpa'][$product_id])) {
        // Ako proizvod već postoji u korpi, povećaj količinu
        $_SESSION['korpa'][$product_id]['kolicina'] += $kolicina;
    } else {
        $_SESSION['korpa'][$product_id] = [
            "id" => $proizvod['id'],
            "naziv" => $proizvod['naziv'],
            "cena" => $proizvod['cena'],
            "slika" => $proizvod['slika'],
            "kolicina" => $kolicina
        ];
    }

    echo json_encode(["success" => true, "message" => "Proizvod dodat u korpu!"]);
    exit;
}
?>
