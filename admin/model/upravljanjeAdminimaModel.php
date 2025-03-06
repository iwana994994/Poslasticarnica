<?php
$query = "SELECT * FROM user WHERE role='admin'";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $admini = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka.");
}
?>