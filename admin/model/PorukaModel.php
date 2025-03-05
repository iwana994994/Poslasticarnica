<?php
session_start();
include_once __DIR__ . '/../config/database.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//-----------Prikazi sve poruke ---------------

$query = "SELECT * FROM poruka";
$query_run = mysqli_query($conn, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $poruke = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
} else {
    die("Greška: Nema poruka u bazi.");
}

//---------------Obrisi Poruku--------------
if(isset($_POST["delete-message"])) {
    $message_id = mysqli_real_escape_string($conn, $_POST["delete-message"]);
    $query ="DELETE FROM poruka WHERE id='$message_id'";
    $query_run = mysqli_query($conn,$query);
    
    if($query_run){
        $_SESSION['message']='Poruka je obrisana'; //Napisala si proizvod
        header('Location: ../admin-dashboard.php?page=poruke');
        exit();
    }
    else{
        $_SESSION['message']='Poruka nije obrisana'; //Ista situacija
        header('Location: ../admin-dashboard.php?page=poruke');
        exit();
    }
}
return $poruke; // Vraća niz za korišćenje u prikazima/views delu
?>
