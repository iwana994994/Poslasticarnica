<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["add-vest"])){
        $naziv=$_POST["naziv"];
        $opis=$_POST["opis"];
        $slika=$_FILES["slika"]["name"];
    

        $query="INSERT INTO vesti (naziv,opis,slika) VALUES ('$naziv','$opis','$slika')";
        $query_run=mysqli_query($con,$query);


if($query_run){

    move_uploaded_file($_FILES["slika"]["tmp_name"],"upload/".$_FILES["slika"]["name"]);
    $_SESSION['message']='Vest je uspesno dodata';
    header("Location: ../admin-dashboard.php?page=dodajVest");
    exit();
}
}else{
    $_SESSION['message']='Vest nije dodata';
    header("Location: ../admin-dashboard.php?page=dodajVest");
    exit();

}

?>