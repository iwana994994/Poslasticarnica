<?php
// Uključi konekciju na bazu (premesti na početak)
include_once __DIR__ . '/../config/database.php';

// Obrada GET parametara

$mesec = isset($_GET['mesec']) ? (int)$_GET['mesec'] : date('m');  // Podrazumevani trenutni mesec
$godina = isset($_GET['godina']) ? (int)$_GET['godina'] : date('Y');  // Podrazumevana trenutna godina

// Validacija: mesec mora biti 1-12, godina razumna
if ($mesec < 1 || $mesec > 12) $mesec = (int)date('m');
if ($godina < 2020 || $godina > 2025) $godina = (int)date('Y');

// Niz za nazive meseci (za prikaz u h1)
$nazivi_meseci = [
    1 => 'Januar', 2 => 'Februar', 3 => 'Mart', 4 => 'April', 5 => 'Maj', 6 => 'Jun',
    7 => 'Jul', 8 => 'Avgust', 9 => 'Septembar', 10 => 'Oktobar', 11 => 'Novembar', 12 => 'Decembar'
];

// Postavljanje varijable za naziv meseca i godinu
$naziv_meseca = $nazivi_meseci[$mesec] ?? 'Nepoznat';
$trenutna_godina = $godina;
$trenutni_mesec = $mesec;

// Upit za porudžbine u izabranom mesecu
$query = "SELECT id, ime, prezime, email, adresa, telefon, datum_porudzbine
          FROM porudzbina
          WHERE MONTH(datum_porudzbine) = ? AND YEAR(datum_porudzbine) = ?
          ORDER BY datum_porudzbine DESC";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "ii", $mesec, $godina);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$porudzbine = [];
if ($result && mysqli_num_rows($result) > 0) {
    $porudzbine = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
