<?php
session_start();
include_once("../config/database.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["addVest"])){
    $naziv = mysqli_real_escape_string($conn, $_POST["naziv"]);
    $opis = mysqli_real_escape_string($conn, $_POST["opis"]);
    $slika = isset($_POST["slika"]) ? mysqli_real_escape_string($conn, $_POST["slika"]) : '';
    

    $query="INSERT INTO vesti (naziv, opis, slika) VALUES ('$naziv', '$opis', '$slika')";
    $query_run = mysqli_query($conn, $query);
       
    if ($query_run) {
        $_SESSION['message'] = 'Vest je uspešno dodata';
        header("Location: ../admin-dashboard.php?page=dodajVest");
        exit();
    } else {
        $_SESSION['message'] = 'Došlo je do greške prilikom dodavanja vesti: ' . mysqli_error($conn);
        header("Location: ../admin-dashboard.php?page=dodajVest");
        exit();
    }
}
?>