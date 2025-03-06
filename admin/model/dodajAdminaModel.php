<?php
session_start();
include_once("../config/database.php");

//-------------regex

$imeRegex = "/^[a-zA-Z]{2,}$/"; // Dozvoljava samo slova (2-30 karaktera)
$emailRegex= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/"; // Standardna e-mail validacija
$usernameRegex= "/^[a-zA-Z0-9]{5,}$/"; // minimalno 5 karaktera, slova i brojevi
$passwordRegex = "/^[a-zA-Z0-9]{8,}$/"; // Minimum 8 karaktera,slova i brojevi



if(isset($_POST["add-admin"])){
    $ime = mysqli_real_escape_string($con, $_POST["ime"]);
    $prezime = mysqli_real_escape_string($con, $_POST["prezime"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con,$_POST["password"]); //

//------------provera regex

$errors = [];

if (!preg_match($imeRegex, $ime)) {
    $errors[] = "Ime mora imati samo slova i biti između 2 ili vise karaktera.";
}
if (!preg_match($imeRegex, $prezime)) {
    $errors[] = "Prezime mora imati samo slova i biti između 2 i 30 karaktera.";
}
if (!preg_match($emailRegex, $email)) {
    $errors[] = "E-mail nije ispravan.";
}
if (!preg_match($usernameRegex, $username)) {
    $errors[] = "Korisničko ime mora imati 5-20 karaktera";
}
if (!preg_match($passwordRegex, $password)) {
    $errors[] = "Lozinka mora imati najmanje 8 karaktera, jedno veliko slovo, jedan broj i jedan specijalni znak.";
}

if (!empty($errors)) {
  
    $_SESSION['errors'] = $errors;
    header("Location: /Poslasticarnica/index.php?page=registracija"); // Preusmeravanje na formu
    exit(0);
}









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
