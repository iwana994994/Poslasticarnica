<?php
include_once("./config/database.php");


class PorukaModel{
  
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    // Funkcija za prikazivanje poruka u admin panelu
    public function prikaziPoruke() {
        $stmt = $this->pdo->prepare("SELECT * FROM poruka ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Funkcija za brisanje poruke
    public function obrisiPoruku($id) {
        $stmt = $this->pdo->prepare("DELETE FROM poruka WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
