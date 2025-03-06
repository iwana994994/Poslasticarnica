<?php
session_start();
include_once("../config/database.php");

if(isset($_POST["add-admin"])){
    $ime = mysqli_real_escape_string($con, $_POST["ime"]);
    $prezime = mysqli_real_escape_string($con, $_POST["prezime"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con,$_POST["password"]); // 🔒 Enkripcija lozinke

    // Ispravan SQL upit
    $query = "INSERT INTO user (ime, prezime, email, username, password, role) 
              VALUES ('$ime', '$prezime', '$email', '$username', '$password', 'admin')";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = 'Admin je uspešno dodat';
        header("Location: ../admin-dashboard.php?page=dodajAdmina");
        exit();
    } else {
        $_SESSION['message'] = 'Greška pri dodavanju admina!';
        header("Location: ../admin-dashboard.php?page=dodajAdmina");
        exit();
    }
} else {
    $_SESSION['message'] = 'Neispravan unos!';
    header("Location: ../admin-dashboard.php?page=dodajAdmina");
    exit();
}
?>
