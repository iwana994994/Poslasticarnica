<?php
include_once("./config/database.php");
class ProizvodModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProizvodi() {
        $stmt = $this->pdo->query("SELECT * FROM proizvod");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProizvod($ime, $opis, $cena, $zalihe, $slika) {
        $stmt = $this->pdo->prepare("INSERT INTO proizvod (ime, opis, cena, zalihe, slika) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$ime, $opis, $cena, $zalihe, $slika]);
    }

    public function deleteProizvod($id) {
        $stmt = $this->pdo->prepare("DELETE FROM proizvod WHERE id = ?");
        return $stmt->execute([$id]);
    }
    public function updateProizvod($id, $naziv, $cena, $opis, $slika) {
        $stmt = $this->pdo->prepare ("UPDATE proizvodi SET naziv = :naziv, cena = :cena, opis = :opis, slika = :slika WHERE id = :id");
        
        $stmt->bindParam(":naziv", $naziv);
        $stmt->bindParam(":cena", $cena);
        $stmt->bindParam(":opis", $opis);
        $stmt->bindParam(":slika", $slika);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
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
