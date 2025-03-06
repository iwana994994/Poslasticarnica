<?php

include_once(__DIR__ . "/../config/database.php");


   if (isset($_POST['login'])) {
    // uzimamo podatke iz input 
	      $user =mysqli_real_escape_string($con,$_POST['username']);
	      $password = mysqli_real_escape_string($con,$_POST['password']);

    // saljemo podatke putem query-a
          $query= "SELECT * FROM user WHERE username='$user' AND password='$password' LIMIT 1";
          $query_run=mysqli_query($con,$query);
   
          // proveravamo podatke sa bazom 
          //1. ako postoje podaci proveravaj rolu
          //2. ako podaci nisu ispravni aktiviraj sesiju obavestenja da podaci nisu ispravni
  if (mysqli_num_rows($query_run)> 0)
{
  // sada uziamo podatke iz baze i uporedjujemo ih sa datim podacima
  foreach ($query_run as $data){
    $user_id = $data["id"];
      $username = $data["username"];
      $email = $data["email"];
      $password = $data["password"];
      $role = $data["role"];
  }
  //uzeli smo podatke iz baze i stavili ih u promenjive
  //1. sada pravimo sesiju koja odredjuje za koga user-a ce da se pojavi koja stranica
  $_SESSION['auth']=true;
  $_SESSION['role']=$role;
  $_SESSION['auth-user']=[
    'user_id'=>$user_id,
    'username'=>$username,
    'email'=>$email
  ];

if ($_SESSION['role']=='admin') {

  $_SESSION["message2"] = "Dobro dosli na Dashboard";
  header("Location: /Poslasticarnica/admin/admin-dashboard.php?page=pocetna");
  exit(0);
}
elseif ($_SESSION['role']=='user') {
  
  $_SESSION["message2"] = "Dobro dosli na početnu stranu";
  header("Location: /Poslasticarnica/index.php?page=pocetna");
  exit(0);
  
}

}
else{
    $_SESSION["message2"] = "Nije dobar username ili lozinka";
    header("Location: /Poslasticarnica/index.php?page=login");
    exit(0);
}
}    

?>