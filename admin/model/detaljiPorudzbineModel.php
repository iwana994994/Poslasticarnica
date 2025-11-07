<?php



if (isset($_GET['id'])) {
    $porudzbina_id = intval($_GET['id']);
} else {
    die("Greška: ID porudžbine nije prosleđen.");
}



$query = "
SELECT 
    p.id AS porudzbina_id,
    p.ime,
    p.prezime,
    p.adresa,
    p.telefon,
    p.nacin_placanja,
    p.datum_porudzbine,
    pr.naziv AS proizvod,
    sp.kolicina,
    sp.cena
FROM porudzbina p
JOIN stavke_porudzbine sp ON p.id = sp.porudzbina_id
JOIN proizvod pr ON sp.proizvod_id = pr.id
WHERE p.id = $porudzbina_id
";

$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $detalji = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    die("Greška: Nema stavki za ovu porudžbinu.");
}

function getDetaljiById($con, $id) {
    // Očisti ID da izbegnemo SQL injection
    $id = mysqli_real_escape_string($con, $id);

    // Dohvati osnovne podatke o porudžbini
    $query = "SELECT * FROM porudzbina WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $porudzbina = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

        // Dohvati proizvode i stavke te porudžbine
        $query_proizvodi = "
            SELECT pr.naziv, sp.kolicina, sp.cena
            FROM stavke_porudzbine sp
            JOIN proizvod pr ON sp.proizvod_id = pr.id
            WHERE sp.porudzbina_id='$id'
        ";
        $result_proizvodi = mysqli_query($con, $query_proizvodi);

        $proizvodi = [];
        if ($result_proizvodi && mysqli_num_rows($result_proizvodi) > 0) {
            while ($row = mysqli_fetch_assoc($result_proizvodi)) {
                $proizvodi[] = $row;
            }
        }

        // Dodaj proizvode u porudžbinu
        $porudzbina['stavke'] = $proizvodi;

        return $porudzbina;
    }

    return null; // Porudžbina nije pronađena
}



?>
