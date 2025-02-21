<?php
class PorukaOdKorisnikaModel {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;}
        public function dodajPoruku($ime, $email, $poruka) {
            if (isset($_POST['submit'])) {
                // Preuzimanje podataka iz forme
                $ime = $_POST['ime'];
                $email = $_POST['email'];
                $poruka = $_POST['poruka'];
            
                // Pozivamo funkciju iz kontrolera da pošaljemo poruku u bazu
        
               
                
            }
            
        }
    }
           
?>
