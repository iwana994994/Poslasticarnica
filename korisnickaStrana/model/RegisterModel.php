<?php
session_start();
include_once(__DIR__ . "/../config/database.php");


if(isset($_POST["register"]) ) {
$ime = mysqli_real_escape_string($con, $_POST["ime"]);
$prezime = mysqli_real_escape_string($con, $_POST["prezime"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$username = mysqli_real_escape_string($con, $_POST["username"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);
$confirm_password = mysqli_real_escape_string($con, $_POST["confirm-password"]);

if($password == $confirm_password) { 
//Check email   --- da li email vec  postoji u registraciji 
$checkEmail = "SELECT email FROM user WHERE email='$email'";
$checkEmail_run= mysqli_query($con, $checkEmail);

if(mysqli_num_rows($checkEmail_run)> 0)
{
    $_SESSION["message2"] = 'Email već postoji';
    header("Location: /Poslasticarnica/index.php?page=registracija");
    exit(0);

}
else {
    // Provera da li korisničko ime već postoji
    $checkUsername = "SELECT username FROM user WHERE username='$username'";
    $checkUsername_run = mysqli_query($con, $checkUsername);

    if(mysqli_num_rows($checkUsername_run) > 0) {
        $_SESSION["message2"] = 'Korisničko ime već postoji';
        header("Location: /Poslasticarnica/index.php?page=registracija");
        exit(0);
     }
else{
// Šifrovanje lozinke pre unosa u bazu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $user_query="INSERT INTO user(ime,prezime,email,username,`password`) VALUES ('$ime','$prezime','$email','$username','$password')";
    $user_query_run= mysqli_query($con, $user_query);
    
    if($user_query_run){
        $_SESSION["message2"] = 'Registracija je uspešna';
        header("Location: /Poslasticarnica/index.php?page=login");
        exit(0);
    }
    else{
        $_SESSION["message2"] = 'Registracija nije uspešna, pokušajte ponovo';
        header("Location: /Poslasticarnica/index.php?page=registracija");
        exit(0);
    }
}
}}
else{
    $_SESSION["message2"] = 'Šifra i potvrda šifre nisu iste';
    header("Location: /Poslasticarnica/index.php?page=registracija");
    exit(0);
}

}
else {

    header("Location: /Poslasticarnica/index.php?page=registracija");
    exit(0);
}

?>