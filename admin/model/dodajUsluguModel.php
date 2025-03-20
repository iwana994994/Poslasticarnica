<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["add-uslugu"])){
        $naziv=$_POST["naziv"];
        $opis=$_POST["opis"];
        $slika=$_FILES["slika"]["name"];

  
    // Definišite putanju gde će se slika sačuvati
    $upload_dir = "admin/model/upload/";
    $upload_file = $upload_dir .$slika;
    

        $query="INSERT INTO usluge (naziv,opis,slika) VALUES ('$naziv','$opis','$upload_file')";
        $query_run=mysqli_query($con,$query);


if($query_run){

    move_uploaded_file($_FILES["slika"]["tmp_name"],"upload/".$_FILES["slika"]["name"]);
    $_SESSION['message']='Usluga je uspesno dodata';
    header("Location: ../admin-dashboard.php?page=dodajUslugu");
    exit();
}
}else{
    $_SESSION['message']='Usluga nije dodata';
    header("Location: ../admin-dashboard.php?page=dodajUslugu");
    exit();

}

?>