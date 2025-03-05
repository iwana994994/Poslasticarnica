<?php
session_start();
include_once("../config/database.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["add-product"])){
        $naziv=$_POST["naziv"];
        $cena=$_POST["cena"];
        $opis=$_POST["opis"];
    

        $query="INSERT INTO proizvod (naziv,cena,opis) VALUES ('$naziv', '$cena', '$opis')";
        $query_run=mysqli_query($conn,$query);

        if ($query_run) {
            $_SESSION['message'] = 'Proizvod je uspešno dodat';
            header("Location: ../admin-dashboard.php?page=dodajProizvod");
            exit();
        } else {
            $_SESSION['message'] = 'Došlo je do greške prilikom dodavanja proizvoda: ' . mysqli_error($conn);
            header("Location: ../admin-dashboard.php?page=dodajProizvod");
            exit();
        }
    }
?>