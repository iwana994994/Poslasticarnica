<?php 
session_start();


if(isset($_GET["id"])){

include_once("../config/database.php");

$vest_id = mysqli_real_escape_string($con, $_GET["id"]);
$query = "SELECT * FROM vesti WHERE id='$vest_id'";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $vest = mysqli_fetch_array($query_run);
} else {
    die("Greška: Vest nije pronađena.");
}

}
if(isset($_POST["edit-vest"])){
    $naziv=$_POST["naziv"];
    $opis=$_POST["opis"];


    $update = "UPDATE vesti SET naziv='$naziv', opis='$opis' WHERE id='$vest_id'";

    $update_run=mysqli_query($con,$update);

    if($update_run) {
        $_SESSION['message'] = 'Vest je uspešno izmenjena';
        header("Location: ../admin-dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = 'Došlo je do greške prilikom izmene vesti';
        header("Location: ../admin-dashboard.php");
        exit();
    }

}


?>