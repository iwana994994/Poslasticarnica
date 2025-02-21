<?php

include_once("./model/ProizvodModel.php");


class ProizvodController {
    private $proizvodModel;

    public function __construct($pdo) {
        $this->proizvodModel = new ProizvodModel($pdo);
    }

    public function prikaziProizvode() {
       return $this->proizvodModel->getAllProizvodi();
    }

    public function obrisiProizvod($id) {
        if ($id) {
            $this->proizvodModel->deleteProizvod($id);  // Brisanje proizvoda prema ID-u
           
        }   

    }
    public function azurirajProizvod($id, $naziv, $cena, $opis, $slika) {
        return $this->proizvodModel->updateProizvod($id, $naziv, $cena, $opis, $slika);
    }

    public function dodajProizvod() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $naziv = $_POST['naziv'];
            $cena = $_POST['cena'];
            $opis = $_POST['opis'];
        
            if (!empty($_FILES["slika"]["name"])) {
                $slika = basename($_FILES["slika"]["name"]);
                move_uploaded_file($_FILES["slika"]["tmp_name"], "../public/uploads/" . $slika);
            }
        
            // Ubacivanje u bazu 
            $query = "INSERT INTO proizvodi (naziv, cena, opis, slika) VALUES (?, ?, ?, ?)";
            $stmt = $this ->proizvodModel->prepare($query);
            $stmt->execute([$naziv, $cena, $opis, $slika]);
        
            header("Location: ../admin/template/dodajProizvod.php?success=1");
            exit();
        }
        }
        
}




?>
