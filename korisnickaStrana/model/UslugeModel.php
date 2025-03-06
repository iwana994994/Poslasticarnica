<?php

include_once(__DIR__ . "/../config/database.php");

$query = "SELECT * FROM usluge ";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vesti = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Usluga nije pronađena.");
}
//----------------------Uzmi id- usluge i prikazi na novu stranicu 
if(isset($_GET["id"])){
    
    $usluga_id = mysqli_real_escape_string($con, $_GET["id"]);
    $query = "SELECT * FROM usluge WHERE id='$usluga_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $usluga = mysqli_fetch_array($query_run);
    } else {
        die("Greška: Usluga nije pronadjena.");
    }
    

}


?>