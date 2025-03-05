<?php

include_once(__DIR__ . "/../config/database.php");

$query = "SELECT * FROM vesti ";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vesti = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Vest nije pronađena.");
}
//----------------------Uzmi id- vesti i prikazi na novu stranicu 
if(isset($_GET["id"])){
    
    $news_id = mysqli_real_escape_string($con, $_GET["id"]);
    $query = "SELECT * FROM vesti WHERE id='$news_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $vest = mysqli_fetch_array($query_run);
    } else {
        die("Greška: Vest nije pronadjena.");
    }
    

}


?>