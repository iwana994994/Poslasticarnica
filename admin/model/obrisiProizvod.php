<?php
session_start();
include_once("../config/database.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["delete-product"])) {
    $product_id= mysqli_real_escape_string($conn,$_POST["delete-product"]);
    $query = "DELETE FROM proizvod WHERE id='$product_id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['message'] = 'Proizvod je obrisan';
        header('Location: ../admin-dashboard.php');
        exit();
    } else { 
        $_SESSION['message']='Proizvod nije obrisan' . mysqli_error($conn);
        header('Location: ../admin-dashboard.php');
        exit();
    }
}
?>