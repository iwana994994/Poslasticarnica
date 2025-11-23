<?php
include_once __DIR__ . '/../config/database.php';

// Preuzmi mesec i godinu iz GET zahteva (ako nisu poslati, koristi trenutne vrednosti)
$month = $_GET['month'] ?? date('n');  // Trenutni mesec
$year = $_GET['year'] ?? date('Y');    // Trenutna godina

// Funkcija koja dohvata porudžbine iz baze za određeni mesec i godinu
function getOrdersByMonth($month, $year) {
    global $con;  // Koristiš globalnu bazu konekciju

    // SQL upit za dobijanje porudžbina
   $query = "SELECT id, ime, prezime, datum_porudzbine
          FROM porudzbina
          WHERE YEAR(datum_porudzbine) = $year AND MONTH(datum_porudzbine) = $month
          ORDER BY datum_porudzbine DESC";

    // Izvršavanje upita
    $query_run = mysqli_query($con, $query);
    
    // Provera greške u SQL upitu
    if (!$query_run) {
        die('MySQL Error: ' . mysqli_error($con));
    }

    // Ako postoji rezultat, vrati ga kao niz
    if (mysqli_num_rows($query_run) > 0) {
        return mysqli_fetch_all($query_run, MYSQLI_ASSOC);
    } else {
        return [];  // Ako nema podataka, vrati prazan niz
    }
}

// Ako je pozvan AJAX, vrati JSON odgovor
if (isset($_GET['ajax'])) {
    $orders = getOrdersByMonth($month, $year);  // Pozivanje funkcije za dobijanje porudžbina
    echo json_encode($orders);  // Vraćanje podataka u JSON formatu
    exit;  // Zaustavi dalje izvršavanje PHP koda
}
ini_set('display_errors', 1);
error_reporting(E_ALL);


?>
