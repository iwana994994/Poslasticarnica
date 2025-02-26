<?php
include_once(__DIR__ . "/../config/database.php");



class  ProizvodModel{
    private $pdo;
 public function __construct($pdo){
    $this->pdo = $pdo;}

    public function prikaziProizvod() {
        $stmt = $this->pdo->query("SELECT * FROM proizvod");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function prikazi5Proizvoda() {
        $stmt = $this->pdo->query("SELECT * FROM proizvod LIMIT 5");
       
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}








?>