<?php
session_start();
include_once(__DIR__ . "/../config/database.php");

 
        // Pretraži bazu po korisničkom imenu
   if (isset($_POST['login'])) {
	$user =mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);

    $query= "SELECT * FROM user WHERE username='$user' AND 'password'='$password' LIMIT 1";
    $query_run=mysqli_query($con,$query);

  if (mysqli_num_rows($query_run)> 0)
{}
else{
    $_SESSION["message2"] = "Nije dobar username ili lozinka";
    header("Location: /Poslasticarnica/index.php?page=login");
    exit(0);
}
}    

?>