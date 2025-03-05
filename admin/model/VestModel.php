<?php

$query = "SELECT * FROM vesti";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vesti = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka.");
}
?>