<?php
      
$query = "SELECT * FROM proizvod ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $proizvodi = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema proizvoda.");
}





?>
