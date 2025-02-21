<?php
require_once './config/database.php';
include_once("./model/ProizvodModel.php");

class AzurirajProizvodController{
private $azurirajProizvod;
public function __construct($pdo) {
    $this->azurirajProizvod = $pdo;
}

public function azurirajProizvod(){
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editProizvod'])) {
        $id = $_POST["id"];
        $naziv = $_POST["naziv"];
        $cena = $_POST["cena"];
        $opis = $_POST["opis"];
    
        // Obrada slike
        if (!empty($_FILES["slika"]["name"])) {
            $slika = "uploads/" . basename($_FILES["slika"]["name"]);
            move_uploaded_file($_FILES["slika"]["tmp_name"], "../" . $slika);
        } else {
            $slika = $_POST["stara_slika"];
        }
    }


}
}



?>