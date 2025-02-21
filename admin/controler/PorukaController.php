<?php
include_once("./config/database.php");
include_once './model/PorukaModel.php';  // Uključujemo model

class PorukaController {
    private $adminModel;

    public function __construct($pdo) {
        $this->adminModel = new PorukaModel($pdo);  // Kreiramo objekat modela
    }

    // Funkcija za prikazivanje poruka u admin panelu
    public function prikaziPoruke() {
        // Dohvatamo sve poruke
        $poruke = $this->adminModel->getPoruke();
        return $poruke;  // Vraćamo poruke kontroleru koji ih prikazuje u view-u
    }

    // Funkcija za brisanje poruke
    public function obrisiPoruku($id) {
        $this->adminModel->deletePoruka($id);  // Pozivamo model da obriše poruku
    }
}
?>
