<?php
include_once __DIR__ . '/../config/database.php';
include_once __DIR__ . '/../model/pocetnaModel.php'; 


$year = intval($_GET['year']);
$month = intval($_GET['month']);

$data = getOrdersByDate($year, $month);

header('Content-Type: application/json');
echo json_encode($data);
?>