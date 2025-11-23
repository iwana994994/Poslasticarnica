<?php

 include_once __DIR__ . '/../config/database.php';


$query = "SELECT p.ime, p.prezime, p.email, p.adresa, p.telefon, p.datum_porudzbine
    FROM porudzbina p
    LEFT JOIN user u ON p.email = u.email
    WHERE u.id IS NULL
    ORDER BY p.datum_porudzbine DESC
";


$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $anonimni = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    $anonimni = [];  // Ako nema rezultata, postavi prazan niz
}

?>
