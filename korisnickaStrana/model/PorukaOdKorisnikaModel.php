<?php
class PorukaOdKorisnikaModel {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;}
     
            
         // Funkcija za unos poruke u bazu (dodajPoruku)
    public function dodajPoruku($ime, $email, $poruka) {
        $sql = "INSERT INTO poruka (ime, email, poruka) VALUES (:ime, :email, :poruka)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':ime', $ime);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':poruka', $poruka);
        return $stmt->execute();
    }


    }
           
?>
