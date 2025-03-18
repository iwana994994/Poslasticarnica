<?php

include_once("../config/database.php");

if(isset($_POST["add-product"])){
        $naziv=$_POST["naziv"];
        $cena=$_POST["cena"];
        $opis=$_POST["opis"];
        $slika=$_FILES["slika"]["name"];

        // Definišite putanju gde će se slika sačuvati
    $upload_dir = "../korisnickaStrana/public/slike/upload/";
    $upload_file = $upload_dir .$slika;
    

        $query="INSERT INTO proizvod (naziv,cena,opis,slika) VALUES ('$naziv', '$cena', '$opis','$upload_file')";
        $query_run=mysqli_query($con,$query);


if($query_run){

    move_uploaded_file($_FILES["slika"]["tmp_name"], $upload_file);
    $_SESSION['message']='Proizvod je uspesno dodat';
    header("Location: ../admin-dashboard.php?page=dodajProizvod");
    exit();
}
}else{
    $_SESSION['message']='Proizvod nije dodat';
    header("Location: ../admin-dashboard.php?page=dodajProizvod");
    exit();

}

?>