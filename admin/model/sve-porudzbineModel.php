<?php


$query = "SELECT * FROM porudzbina ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $porudzbine = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    $porudzbine = []; // ako nema porudžbina, da ne baca grešku
}
?>
