<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["delete-vest"]))
{
$vest_id= mysqli_real_escape_string($con,$_POST["delete-vest"]);
$query ="DELETE FROM vesti WHERE id='$vest_id'";
$query_run = mysqli_query($con,$query);

    if ($query_run) 
        // Ako je vest obrisana
        $_SESSION['message'] = 'Vest je obrisana';
    
        // Preusmeravanje na str sa porukom o uspehu
        header('Location: ../admin-dashboard.php?page=vesti');
        exit();
}
else{
    $_SESSION['message']='Vest nije obrisana'; 
    header('Location: ../admin-dashboard.php?page=vesti') ;
    exit();
}


?>