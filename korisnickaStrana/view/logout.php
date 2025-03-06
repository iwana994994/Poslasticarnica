<?php
session_start();
session_destroy(); // Uništava sesiju
header("Location: /Poslasticarnica/index.php?page=pocetna"); // Vraća korisnika na početnu
exit();
?>
