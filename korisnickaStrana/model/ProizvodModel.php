<?php
include_once(__DIR__ . "/../config/database.php");


$query = "SELECT * FROM proizvod ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $proizvodi = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Proizvod nije pronađen.");
}


$query = "SELECT * FROM proizvod ORDER BY id DESC LIMIT 5";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $proizvod5 = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Proizvod nije pronađen.");
}


function getProizvodById($con, $id) {
    $product_id = mysqli_real_escape_string($con, $id);
    $query = "SELECT * FROM proizvod WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        return mysqli_fetch_array($query_run);
    }
    return null; // Proizvod nije pronađen
}
?>