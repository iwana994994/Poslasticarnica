<?php
include_once(__DIR__ . "/../model/KontaktModel.php");
include_once(__DIR__ . "/../model/PorukaOdKorisnikaModel.php");

class KontaktController {
    private $kontakt;
    private $poruka;

    // Konstruktor za povezivanje sa bazom
    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->kontakt = new KontaktModel($pdo);
        $this->poruka = new PorukaOdKorisnikaModel($pdo);
    }

    // Funkcija za dobijanje kontakta
    public function getKontakt() {
        return $this->kontakt->getKontakt();
    }

     // Funkcija za unos poruke u bazu (dodajPoruku)
     public function dodajPoruku($ime, $email, $poruka) {
        return $this->poruka->dodajPoruku($ime, $email, $poruka);
    }

}

?>

