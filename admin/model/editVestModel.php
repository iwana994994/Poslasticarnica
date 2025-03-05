<?php 
session_start();
include_once("../config/database.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$vesti_id = '';
if(isset($_GET["id"])){
    $vesti_id = mysqli_real_escape_string($conn, $_GET["id"]);
    $query = "SELECT * FROM vesti WHERE vesti_id='$vesti_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $vest = mysqli_fetch_array($query_run);
    } else {
        die("Greška: Vest nije pronađena.");
    }
}

if(isset($_POST["editVest"])){
    $vesti_id = mysqli_real_escape_string($conn, $_GET["id"] ?? $_POST["id"] ?? '');
    $naziv = mysqli_real_escape_string($conn, $_POST["naziv"]);
    $opis = mysqli_real_escape_string($conn, $_POST["opis"]);
    $slika = isset($_POST["slika"]) ? mysqli_real_escape_string($conn, $_POST["slika"]) : '';


    $update = "UPDATE vesti SET naziv='$naziv', opis='$opis', slika='$slika' WHERE vesti_id='$vesti_id'";
    $update_run = mysqli_query($conn, $update);

    if($update_run) {
        $_SESSION['message'] = 'Vest je uspešno izmenjena';
        header("Location: ../admin-dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = 'Došlo je do greške prilikom izmene vesti' . mysqli_error($conn);
        header("Location: ../admin-dashboard.php");
        exit();
    }
}
?>