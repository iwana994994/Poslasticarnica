<?php
include_once(__DIR__ . "/../config/database.php");

function getUsluge($con, $id = null) {
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if ($id) {
        $services_id = mysqli_real_escape_string($con, $id);
        $query = "SELECT * FROM usluge WHERE id='$services_id'";
        $query_run = mysqli_query($con, $query);
        
        if (!$query_run) {
            die("Query failed for ID $services_id: " . mysqli_error($con));
        }
        
        if (mysqli_num_rows($query_run) > 0) {
            return mysqli_fetch_array($query_run);
        } else {
            return null;
        }
    } else {
        $query = "SELECT * FROM usluge";
        $query_run = mysqli_query($con, $query);
        
        if (!$query_run) {
            die("Query failed: " . mysqli_error($con));
        }
        
        $row_count = mysqli_num_rows($query_run);
        if ($row_count > 0) {
            $result = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
            echo "<!-- Debug: Found $row_count rows in usluge table -->";
            return $result;
        } else {
            echo "<!-- Debug: No rows found in usluge table -->";
            return [];
        }
    }
}

global $usluge;
$usluge = getUsluge($con, isset($_GET["id"]) ? $_GET["id"] : null);
if (!isset($usluge)) {
    $usluge = [];
}
?>