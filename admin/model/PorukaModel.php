<?php
include_once __DIR__ . '/../config/database.php';



class PorukaModel{
  
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    // Funkcija za prikazivanje poruka u admin panelu
    public function prikaziPoruke() {
        $stmt = $this->pdo->prepare("SELECT * FROM poruka ");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
    if(isset($_POST["delete-message"]))
    {
    $product_id= mysqli_real_escape_string($con,$_POST["delete-message"]);
    $query ="DELETE FROM poruka WHERE id='$product_id'";
    $query_run = mysqli_query($con,$query);
    
    if($query_run){
        $_SESSION['message']='Proizvod je obrisan';
        header('Location: ../admin-dashbord.php?page=poruke');
        exit();
    }
    else{
        $_SESSION['message']='Proizvod nije obrisan';
        header('Location: ../admin-dashbord.php?page=poruke');
        exit();
    }
}
?>
