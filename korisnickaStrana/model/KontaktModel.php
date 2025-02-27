<?php
session_start();
include_once(__DIR__ ."/../config/database.php");



class KontaktModel {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;}

    // Funkcija za dobijanje kontakta
    function getKontakt(){
        $stmt = $this->pdo->query("SELECT * FROM kontakt");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    
            
    
      }
}
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

