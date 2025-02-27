<?php

$con=mysqli_connect("localhost","root","","poslasticarnica");


$host="localhost";
$dbname="poslasticarnica";
$username="root";
$password="";

try{
$pdo= new PDO( "mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
$pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(ERRMODE_EXEPTION $e)
{
    die("Greska sa bazom".$e.getMessage());
}



?>