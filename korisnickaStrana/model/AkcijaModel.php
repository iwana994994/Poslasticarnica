<?php
include_once(__DIR__ . "/../config/database.php");


$query = "SELECT * FROM akcije ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $akcija = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Akcija nije pronađena.");
}


$query = "SELECT * FROM akcije ORDER BY id DESC LIMIT 5";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $akcija5 = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Akcija nije pronađena.");
}

function getAkcijaById($con, $id) {
    $akcija_id = mysqli_real_escape_string($con, $id);
    $query = "SELECT * FROM akcije WHERE id='$akcija_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        return mysqli_fetch_array($query_run);
    }
    return null; // Akcija nije pronađena
}
?>