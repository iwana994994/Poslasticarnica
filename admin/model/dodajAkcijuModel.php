<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["add-akciju"])){
        $naziv=$_POST["naziv"];
        $cena=$_POST["cena"];
        $opis=$_POST["opis"];
        $slika=$_FILES["slika"]["name"];
   

        $query="INSERT INTO akcije (naziv,cena,opis,slika) VALUES ('$naziv', '$cena', '$opis','$slika')";
        $query_run=mysqli_query($con,$query);


if($query_run){

    move_uploaded_file($_FILES["slika"]["tmp_name"],"upload/".$_FILES["slika"]["name"]);
    $_SESSION['message']='Akcija je uspesno dodata.';
    header("Location: ../admin-dashboard.php?page=dodajAkciju");
    exit();
}
}else{
    $_SESSION['message']='Akcija nije dodata.';
    header("Location: ../admin-dashboard.php?page=dodajAkciju");
    exit();

}

?>