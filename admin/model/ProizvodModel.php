<?php



class ProizvodModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function prikaziProizvode() {
       $stmt = $this->pdo->query("SELECT * FROM proizvod");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   
    
}
        





?>
