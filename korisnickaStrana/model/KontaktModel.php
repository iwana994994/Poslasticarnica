<?php
include_once("../config/database.php");
class KontaktModel{
private $pdo;
public function __construct($pdo){
    $this->pdo = $pdo;

}
   function getKontakt(){
    $stmt = $this->pdo->query("SELECT * FROM kontakt");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);

        

  }
}


?>