<?php
// korisnickaStrana/model/PretragaModel.php

include_once(__DIR__ . "/../config/database.php");

// 1) Uzimamo vrednosti iz GET-a
$q = isset($_GET['q']) ? trim($_GET['q']) : '';

$selected_kategorije = isset($_GET['kategorija']) && is_array($_GET['kategorija'])
    ? array_filter($_GET['kategorija'])
    : [];

$min_cena = isset($_GET['cena_od']) && $_GET['cena_od'] !== ''
    ? (float)$_GET['cena_od']
    : null;

$max_cena = isset($_GET['cena_do']) && $_GET['cena_do'] !== ''
    ? (float)$_GET['cena_do']
    : null;

// 2) Gradimo uslove za WHERE
$conditions = [];

// Tekstualna pretraga
if ($q !== '') {
    $q_esc = mysqli_real_escape_string($con, $q);
    $conditions[] = "(naziv LIKE '%$q_esc%' 
                      OR opis LIKE '%$q_esc%'
                      OR kategorija LIKE '%$q_esc%')";
}

// Filter po kategorijama (checkbox)
if (!empty($selected_kategorije)) {
    $safeCats = [];
    foreach ($selected_kategorije as $cat) {
        $safeCats[] = "'" . mysqli_real_escape_string($con, $cat) . "'";
    }
    $conditions[] = "kategorija IN (" . implode(',', $safeCats) . ")";
}

// Cena od
if ($min_cena !== null) {
    $conditions[] = "cena >= " . $min_cena;
}

// Cena do
if ($max_cena !== null) {
    $conditions[] = "cena <= " . $max_cena;
}

// 3) Sastavljamo konačni SQL
$sql = "SELECT * FROM proizvod";

if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

$sql .= " ORDER BY naziv ASC";

// 4) Izvršavanje upita
$result = mysqli_query($con, $sql);
$proizvodi = $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
