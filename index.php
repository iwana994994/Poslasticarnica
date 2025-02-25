<?php
include './korisnickaStrana/template/header.php'; // Učitava zaglavlje i navigaciju

$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna';
$file = "./korisnickaStrana/template/{$page}.php";

if (file_exists($file)) {
    include $file;
} else {
    include "./korisnickaStrana/template/pocetna.php";
}

include './korisnickaStrana/template/footer.php'; // Učitava footer
?>
