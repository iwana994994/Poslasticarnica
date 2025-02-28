<?php
include_once __DIR__ . '/../config/database.php';


//-----------Prikazi sve poruke ---------------

$query = "SELECT * FROM poruka ";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $poruke = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka.");
}

//---------------Obrisi Poruku--------------

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
