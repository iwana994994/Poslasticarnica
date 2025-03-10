<?php

 include_once __DIR__ . '/../config/database.php';


$query = "SELECT * FROM user WHERE role='user' ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $korisnici = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka.");
}
//---------------Obrisi Korisnika--------------

if(isset($_POST["delete-product"]))
{
$product_id= mysqli_real_escape_string($con,$_POST["delete-product"]);
$query ="DELETE FROM user WHERE id='$product_id'";
$query_run = mysqli_query($con,$query);

if($query_run){
    $_SESSION['message']='Korisnik je obrisan';
    header('Location: ../admin-dashboard.php?page=korisnici');
    exit();
}
else{
    $_SESSION['message']='Korisnik nije obrisan';
    header('Location: ../admin-dashboard.php?page=korisnici');
    exit();
}
}





?>
