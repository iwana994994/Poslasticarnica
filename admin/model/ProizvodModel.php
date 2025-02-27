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

    public function obrisiProizvod($id) {
        if ($id) {
            $stmt = $this->pdo->prepare("DELETE FROM proizvod WHERE id = ?");
            return $stmt->execute([$id]);           
        }   

    }
    public function azurirajProizvod($id, $naziv, $cena, $opis, $slika) {
        $stmt = $this->pdo->prepare ("UPDATE proizvodi SET naziv = :naziv, cena = :cena, opis = :opis, slika = :slika WHERE id = :id");
        
        $stmt->bindParam(":naziv", $naziv);
        $stmt->bindParam(":cena", $cena);
        $stmt->bindParam(":opis", $opis);
        $stmt->bindParam(":slika", $slika);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    
        }
        





?>
