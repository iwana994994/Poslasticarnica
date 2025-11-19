<?php
// korisnickaStrana/model/PretragaModel.php

// ako konekcija već postoji, neće se ponovo otvoriti
include_once __DIR__ . '/../config/database.php';

/**
 * Pretraga proizvoda po:
 *  - tekstu (naziv, opis, kategorija)
 *  - listi kategorija
 *  - opsegu cene
 */

function pretragaProizvoda(mysqli $con, ?string $q, array $kategorije, $cenaOd, $cenaDo): array
{
    $sql    = "SELECT * FROM proizvod WHERE 1=1";
    $params = [];
    $types  = '';

    // Tekstualna pretraga
    if ($q !== null && $q !== '') {
        $like = '%' . $q . '%';
        $sql .= " AND (naziv LIKE ? OR opis LIKE ? OR kategorija LIKE ?)";
        $params[] = $like;
        $params[] = $like;
        $params[] = $like;
        $types    .= 'sss';
    }

    // Kategorije (checkbox-ovi)
    if (!empty($kategorije)) {
        // Očisti prazne vrednosti
        $kategorije = array_filter($kategorije, fn($v) => $v !== '');

        if (!empty($kategorije)) {
            $placeholders = implode(',', array_fill(0, count($kategorije), '?'));
            $sql .= " AND kategorija IN ($placeholders)";

            foreach ($kategorije as $kat) {
                $params[] = $kat;
                $types    .= 's';
            }
        }
    }

    // Cena od
    if ($cenaOd !== null && $cenaOd !== '') {
        $sql .= " AND cena >= ?";
        $params[] = (float)$cenaOd;
        $types    .= 'd';
    }

    // Cena do
    if ($cenaDo !== null && $cenaDo !== '') {
        $sql .= " AND cena <= ?";
        $params[] = (float)$cenaDo;
        $types    .= 'd';
    }

    $sql .= " ORDER BY naziv";

    // Izvršenje upita
    if (empty($params)) {
        $result = mysqli_query($con, $sql);
    } else {
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt === false) {
            return [];
        }
        mysqli_stmt_bind_param($stmt, $types, ...$params);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }

    $proizvodi = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $proizvodi[] = $row;
        }
    }

    return $proizvodi;
}
