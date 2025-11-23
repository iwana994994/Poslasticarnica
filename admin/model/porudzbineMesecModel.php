<?php
include_once __DIR__ . '/../config/database.php';

// Dohvati parametre iz GET zahteva, sa default vrednostima (trenutni mesec i godina)
$month = $_GET['month'] ?? date('n');
$year = $_GET['year'] ?? date('Y');

// Funkcija za dobijanje porudžbina za određeni mesec i godinu
function getOrdersByMonth($month, $year) {
    global $con;  // Koristi globalnu varijablu $con

    // SQL upit za dobijanje porudžbina
    $query = "SELECT id, ime, prezime, datum_porudzbine, UNIX_TIMESTAMP(datum_porudzbine) AS timestamp
              FROM porudzbina
              WHERE YEAR(datum_porudzbine) = $year AND MONTH(datum_porudzbine) = $month
              ORDER BY datum_porudzbine DESC";

    $query_run = mysqli_query($con, $query);
    
    // Provera grešaka u SQL upitu
    if (!$query_run) {
        die('MySQL Error: ' . mysqli_error($con));
    }

    // Proveri da li postoje podaci
    if (mysqli_num_rows($query_run) > 0) {
        return mysqli_fetch_all($query_run, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Ako je pozvano AJAX, vrati JSON odgovor
if (isset($_GET['ajax'])) {
    $orders = getOrdersByMonth($month, $year);
    echo json_encode($orders);
    exit;
}
?>
