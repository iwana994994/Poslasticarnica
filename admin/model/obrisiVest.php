<?php
session_start();
include_once("../config/database.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["obrisiVest"]))
{
    $vesti_id = mysqli_real_escape_string($conn, $_POST["obrisiVest"]);
    $query = "DELETE FROM vesti WHERE vesti_id='$vesti_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message']='Vest je obrisana';
        header('Location: ../admin-dashboard.php');
    exit();
    } else {
    $_SESSION['message']='Vest nije obrisana' . mysqli_error($conn);
    header('Location: ../admin-dashboard.php');
    exit();
    }
}
?>