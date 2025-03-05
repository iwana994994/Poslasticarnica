<?php

include '../korisnickaStrana/config/database.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM proizvod";
$query_run = mysqli_query($conn, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $proizvodi = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    $proizvodi = []; //vraca prazan niz umesto die, kako bi omogucio nastavak sktipte
}
return $proizvodi; // Vraća niz za upotrebu u drugim datotekama
?>
