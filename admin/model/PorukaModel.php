<?php

include_once __DIR__ . '/../config/database.php';


//-----------Prikazi sve poruke ---------------

$query = "SELECT * FROM poruka ORDER BY id DESC ";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $poruke = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka.");
}

//---------------Obrisi Poruku--------------

    if(isset($_POST["delete-product"]))
    {
    $product_id= mysqli_real_escape_string($con,$_POST["delete-product"]);
    $query ="DELETE FROM poruka WHERE id='$product_id'";
    $query_run = mysqli_query($con,$query);
    
    if($query_run){
        $_SESSION['message']='Poruka je obrisan';
        header('Location: ../admin-dashboard.php?page=poruke');
        exit();
    }
    else{
        $_SESSION['message']='Poruka nije obrisan';
        header('Location: ../admin-dashboard.php?page=poruke');
        exit();
    }
}
?>
