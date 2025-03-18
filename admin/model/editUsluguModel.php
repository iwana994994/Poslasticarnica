<?php 



if(isset($_GET["id"])){

include_once("../config/database.php");

$usluga_id = mysqli_real_escape_string($con, $_GET["id"]);
$query = "SELECT * FROM usluge WHERE id='$usluga_id'";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $usluga = mysqli_fetch_array($query_run);
} else {
    die("Greška: Usluga nije pronađena.");
}

}
if(isset($_POST["edit-uslugu"])){
    $naziv=$_POST["naziv"];
    $opis=$_POST["opis"];
    $slika=$_FILES["slika"]["name"];

    // Definišite putanju gde će se slika sačuvati
    $upload_dir = "admin/model/upload/";
    $upload_file = $upload_dir .$slika;



    $update = "UPDATE usluge SET naziv='$naziv', opis='$opis',slika='$upload_file' WHERE id='$usluga_id'";

    $update_run=mysqli_query($con,$update);

    if($update_run) {
        move_uploaded_file($_FILES["slika"]["tmp_name"],"./upload/".$_FILES["slika"]["name"]);
        $_SESSION['message'] = 'Usluga je uspešno izmenjena';
        header("Location: ../admin-dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = 'Došlo je do greške prilikom izmene usluge.';
        header("Location: ../admin-dashboard.php");
        exit();
    }

}
?>