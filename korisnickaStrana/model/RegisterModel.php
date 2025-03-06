<?php

include_once(__DIR__ . "/../config/database.php");

//-------------------------regex za unos podataka ----
$imeRegex = "/^[a-zA-Z]{2,}$/"; // Dozvoljava samo slova (2-30 karaktera)
$emailRegex= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/"; // Standardna e-mail validacija
$usernameRegex= "/^[a-zA-Z0-9]{5,}$/"; // 
$passwordRegex = "/^[a-zA-Z0-9]{8,}$/"; // Minimum 8 karaktera, 1 veliko slovo, 1 broj, 1 spec. znak



if(isset($_POST["register"]) ) {

$ime = mysqli_real_escape_string($con, $_POST["ime"]);
$prezime = mysqli_real_escape_string($con, $_POST["prezime"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$username = mysqli_real_escape_string($con, $_POST["username"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);
$confirm_password = mysqli_real_escape_string($con, $_POST["confirm_password"]);




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
    

    $user_query="INSERT INTO user(ime,prezime,email,username,`password`) VALUES ('$ime','$prezime','$email','$username','$password')";
    $user_query_run= mysqli_query($con, $user_query);
    
    if($user_query_run){
        $_SESSION["message2"] = 'Registracija je uspešna';
        header("Location: /Poslasticarnica/index.php?page=registracija");
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