<?php
include_once(__DIR__ . "/../config/database.php");


$query = "SELECT * FROM vesti ";
$query_run = mysqli_query($conn, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vesti = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Vest nije pronađena.");
}


$query = "SELECT * FROM vesti LIMIT 5";
$query_run = mysqli_query($conn, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vest5 = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Vest nije pronađena.");
}

?>