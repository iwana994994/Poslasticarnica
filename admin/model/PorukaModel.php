<?php

include_once("./config/database.php");
class PorukaModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Dohvati sve poruke
    public function getPoruke() {
        $stmt = $this->pdo->prepare("SELECT * FROM poruka ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Obriši poruku
    public function deletePoruka($id) {
        $stmt = $this->pdo->prepare("DELETE FROM poruka WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>