<?php
      
$query = "SELECT * FROM akcije ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $akcije = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema akcija.");
}

?>
