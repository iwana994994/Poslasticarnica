<?php
$conn = mysqli_connect("localhost","root","","poslasticarnica");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>