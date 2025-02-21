<?php
include_once("../model/KontaktModel.php");

class KontaktController {
    private $kontakt;

    // Konstruktor za povezivanje sa bazom
    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->kontakt = new KontaktModel($pdo);
    }

    // Funkcija za dobijanje kontakta
    public function getKontakt() {
        return $this->kontakt->getKontakt();
    }

    // Funkcija za unos poruke u bazu (dodajPoruku)
    public function dodajPoruku($ime, $email, $poruka) {
        $sql = "INSERT INTO poruka (ime, email, poruka) VALUES (:ime, :email, :poruka)";
        $stmt = $this->kontakt->prepare($sql);
        $stmt->bindParam(':ime', $ime);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':poruka', $poruka);
        return $stmt->execute();
    }
}

?>

