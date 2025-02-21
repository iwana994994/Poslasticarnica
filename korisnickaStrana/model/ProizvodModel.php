<?php
include_once("../config/database.php");

class ProizvodModel{
 private $pdo;
 public function __construct($pdo){
    $this->pdo = $pdo;}

    public function getAllProizvodi() {
        $stmt = $this->pdo->query("SELECT * FROM proizvod");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>