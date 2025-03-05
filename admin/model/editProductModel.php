<?php 
session_start();
include_once("../config/database.php"); //Ovo sam stavila izvan if kako bi osigurali da je $conn uvek dostupan. 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["id"])){
$product_id = mysqli_real_escape_string($conn, $_GET["id"]);
$query = "SELECT * FROM proizvod WHERE id='$product_id'";
$query_run = mysqli_query($conn, $query);

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
/*Ja bih ovaj deo iznad uradila ovako:
if (isset($_POST["edit-product"])) {
    $product_id = mysqli_real_escape_string($conn, $_GET["id"] ?? $_POST["id"] ?? '');
    $naziv = mysqli_real_escape_string($conn, $_POST["naziv"]);
    $cena = mysqli_real_escape_string($conn, $_POST["cena"]);
    $opis = mysqli_real_escape_string($conn, $_POST["opis"]);

*/

    $update = "UPDATE proizvod SET naziv='$naziv', cena='$cena', opis='$opis' WHERE id='$product_id'";
    $update_run=mysqli_query($conn,$update);

    if($update_run) {
        $_SESSION['message'] = 'Proizvod je uspešno izmenjen';
        header("Location: ../admin-dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = 'Došlo je do greške prilikom izmene proizvoda' . mysqli_error($conn);
        header("Location: ../admin-dashboard.php");
        exit();
    }
}

?>