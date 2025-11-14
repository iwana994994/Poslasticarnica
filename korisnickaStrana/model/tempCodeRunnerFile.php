<?php
session_start();
include_once(__DIR__ . "/../config/database.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $kolicina = isset($_POST['kolicina']) ? (int)$_POST['kolicina'] : 1;

    // Uzmemo podatke o proizvodu iz baze
    $product_id_safe = mysqli_real_escape_string($con, $product_id);
    $query = "SELECT * FROM proizvod WHERE id='$product_id_safe'";
    $result = mysqli_query($con, $query);
    $proizvod = mysqli_fetch_assoc($result);

    if (!$proizvod) {
        echo json_encode(["success" => false, "message" => "Proizvod nije pronađen."]);
        exit;
    }

    // Vrednosti koje dolaze iz fronta (akcijska cena / naziv)
    $naziv = isset($_POST['naziv']) && $_POST['naziv'] !== ''
        ? mysqli_real_escape_string($con, $_POST['naziv'])
        : $proizvod['naziv'];

    $cena = isset($_POST['cena']) && $_POST['cena'] !== ''
        ? (float)$_POST['cena']
        : (float)$proizvod['cena'];

    $slika = isset($_POST['slika']) && $_POST['slika'] !== ''
        ? mysqli_real_escape_string($con, $_POST['slika'])
        : $proizvod['slika'];
      
    // Inicijalizovanje korpe u sesiji ako ne postoji
    if (isset($_SESSION['korpa'])) {
        $_SESSION['korpa'] = [];
    } 

    if (isset($_SESSION['korpa'][$product_id])) {
        // Ako proizvod već postoji u korpi, povećaj količinu
        $_SESSION['korpa'][$product_id]['kolicina'] += $kolicina;
        // Po potrebi ažuriraj cenu/naziv (ako je akcija, ostaje akcijska cena)
        $_SESSION['korpa'][$product_id]['cena'] = $cena;
        $_SESSION['korpa'][$product_id]['naziv'] = $naziv;
        $_SESSION['korpa'][$product_id]['slika'] = $slika;
    } else {
        $_SESSION['korpa'][$product_id] = [
            "id"       => $proizvod['id'],   // ID PROIZVODA
            "naziv"    => $naziv,           // naziv iz akcije ili proizvoda
            "cena"     => $cena,            // AKCIJSKA ili regularna cena
            "slika"    => $slika,
            "kolicina" => $kolicina
        ];
    }   

    echo json_encode(["success" => true, "message" => "Proizvod dodat u korpu!"]);
    exit;
}
?>