<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["delete-uslugu"]))
{
$usluga_id= mysqli_real_escape_string($con,$_POST["delete-uslugu"]);
$query ="DELETE FROM usluge WHERE id='$usluga_id'";
$query_run = mysqli_query($con,$query);

    if ($query_run) 
        // Ako je usluga obrisana
        $_SESSION['message'] = 'Usluga je obrisana';
        header('Location: ../admin-dashboard.php?page=usluge');
        exit();
}
else{
    $_SESSION['message']='Usluga nije obrisana'; 
    header('Location: ../admin-dashboard.php?page=usluge') ;
    exit();
}


?>