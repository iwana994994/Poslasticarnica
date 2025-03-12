<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["delete-akciju"]))
{
$akcija_id= mysqli_real_escape_string($con,$_POST["delete-akciju"]);
$query ="DELETE FROM akcije WHERE id='$akcija_id'";
$query_run = mysqli_query($con,$query);

    if ($query_run) 
        // Ako je akcija obrisana
        $_SESSION['message'] = 'Akcija je obrisana.';
        header('Location: ../admin-dashboard.php?page=akcije');
        exit();
}
else{
    $_SESSION['message']='Akcija nije obrisana.'; 
    header('Location: ../admin-dashboard.php?page=akcije') ;
    exit();
}


?>