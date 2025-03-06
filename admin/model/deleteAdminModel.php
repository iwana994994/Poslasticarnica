<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["delete-admin"]))
{
$admin_id= mysqli_real_escape_string($con,$_POST["delete-admin"]);
$query ="DELETE FROM user WHERE id='$admin_id'";
$query_run = mysqli_query($con,$query);

if($query_run){
    $_SESSION['message']='Admin je obrisan';
    header('Location: ../admin-dashboard.php?page=upravljajAdminima');
    exit();
}
else{
    $_SESSION['message']='Admin nije obrisan';
    header('Location: ../admin-dashboard.php?page=upravljajAdminima');
    exit();
}

}
?>