<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["delete-product"]))
{
$product_id= mysqli_real_escape_string($con,$_POST["delete-product"]);
$query ="DELETE FROM proizvod WHERE id='$product_id'";
$query_run = mysqli_query($con,$query);

if($query_run){
    $_SESSION['message']='Proizvod je obrisan';
    header('Location: ../admin-dashbord.php');
    exit();
}
else{
    $_SESSION['message']='Proizvod nije obrisan';
    header('Location: ../admin-dashbord.php');
    exit();
}

}
?>