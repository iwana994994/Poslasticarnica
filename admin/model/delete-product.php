<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["delete-product"]))
{
$product_id= mysqli_real_escape_string($con,$_POST["delete-product"]);
$query ="DELETE FROM proizvod WHERE id='$product_id'";
$query_run = mysqli_query($con,$query);

    if ($query_run) 
        // Ako je proizvod obrisan
        $_SESSION['message'] = 'Proizvod je obrisan';
    
        // Preusmeravanje na stranicu sa porukom o uspehu
        header('Location: ../admin-dashboard.php?page=proizvodi');
        exit();
}
else{
    $_SESSION['message']='Proizvod nije obrisan'; 
    header('Location: ../admin-dashboard.php?page=proizvodi') ;
    exit();
}


?>