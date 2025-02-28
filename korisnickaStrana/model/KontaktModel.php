<?php
session_start();
include_once(__DIR__ ."/../config/database.php");

// -------------------UZMI PODATKE IZ BAZE ZA KONTAKT ADRESU POSLASTICARNICE


$query = "SELECT * FROM kontakt";
$query_run = mysqli_query($con, $query);


    $kontakt = mysqli_fetch_assoc($query_run);
 

//--------------------- POSALJI PORUKU --------------------- 

if(isset($_POST["send-message"])){
    $ime=$_POST ["ime"];
    $email=$_POST ["email"];
    $poruka=$_POST ["poruka"];

    $query= "INSERT INTO poruka(ime,email,poruka) VALUES ('$ime','$email','$poruka')";
    $query_run = mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']='Poruka je uspesno poslata';
        header("Location: /Poslasticarnica/index.php?page=kontakt");
        exit();
    }
    else{
        $_SESSION['message']='Poruka nije poslata';
        header("Location: /Poslasticarnica/index.php?page=kontakt");
        exit();

    }

}

?>

