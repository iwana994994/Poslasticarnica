<?php

include_once(__DIR__ . "/../config/database.php");

$query = "SELECT * FROM vesti ORDER BY id DESC ";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vesti = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Vest nije pronađena.");
}

// ---------------- 
$query = "SELECT * FROM vesti ORDER BY id DESC LIMIT 5";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vest = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Vest nije pronađena.");
}

function getVestById($con, $id) {
    $vest_id = mysqli_real_escape_string($con, $id);
    $query = "SELECT * FROM vesti WHERE id='$vest_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        return mysqli_fetch_array($query_run);
    }
    return null; // Vest nije pronađena
}
?>