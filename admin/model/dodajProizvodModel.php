<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["add-product"])){
        $naziv=$_POST["naziv"];
        $cena=$_POST["cena"];
        $opis=$_POST["opis"];
    

        $query="INSERT INTO proizvod (ime,cena,opis) VALUES ('$naziv', '$cena', '$opis')";
        $query_run=mysqli_query($con,$query);
if($query_run){
    $_SESSION['message']='Proizvod je uspesno dodat';
    header("Location: ../admin-dashbord.php?page=dodajProizvod");
    exit();
}
}else{
    $_SESSION['message']='Proizvod nije dodat';
    header("Location: ../admin-dashbord.php?page=dodajProizvod");
    exit();

}

?>