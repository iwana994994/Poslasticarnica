<?php
include_once(__DIR__ . "/../config/database.php");


$query = "SELECT * FROM proizvod ";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $proizvodi = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Proizvod nije pronađen.");
}


$query = "SELECT * FROM proizvod LIMIT 5";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $proizvod5 = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Proizvod nije pronađen.");
}




?>