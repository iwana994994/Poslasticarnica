<?php
      
$query = "SELECT * FROM user WHERE role='user' ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $korisnici = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka.");
}





?>
