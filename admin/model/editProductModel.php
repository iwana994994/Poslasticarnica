<?php 
include_once("../config/database.php");


if(isset($_GET["id"])){



$product_id = mysqli_real_escape_string($con, $_GET["id"]);
$query = "SELECT * FROM proizvod WHERE id='$product_id'";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $product = mysqli_fetch_array($query_run);
} else {
    die("Greška: Proizvod nije pronađen.");
}

}
if(isset($_POST["edit-product"])){
    $naziv=$_POST["naziv"];
    $cena=$_POST["cena"];
    $opis=$_POST["opis"];
    $slika=$_FILES["slika"]["name"];

    // Definišite putanju gde će se slika sačuvati
    $upload_dir = "admin/model/upload/";
    $upload_file = $upload_dir .$slika;


    $update = "UPDATE proizvod SET naziv='$naziv', cena='$cena', opis='$opis',slika='$upload_file' WHERE id='$product_id'";

    $update_run=mysqli_query($con,$update);

    if($update_run) {
        move_uploaded_file($_FILES["slika"]["tmp_name"],"./upload/".$_FILES["slika"]["name"]);
        $_SESSION['message'] = 'Proizvod je uspešno izmenjen';
        header("Location: ../admin-dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = 'Došlo je do greške prilikom izmene proizvoda';
        header("Location: ../admin-dashboard.php");
        exit();
    }

}


?>