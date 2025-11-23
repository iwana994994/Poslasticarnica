<?php

//Ukupno prijavljenih
function getCount($totalUsers){

    global $con;
$query = "SELECT * FROM $totalUsers WHERE role='user'";
$query_run = mysqli_query($con,$query);

if($query_run){
    $countTotal = mysqli_num_rows($query_run);

    return $countTotal;
}else{
    return 'Nesto nije u redu !';
}
}

//ukupno anonimnih korisnika 
// Funkcija za broj anonimnih kupaca
function getCountAnonymousCustomers() {
    global $con;

    // Upit koji proverava da li ime i prezime iz porudzbine postoje u tabeli user
    $query = "
        SELECT COUNT(*) AS ukupno_anonimnih
        FROM porudzbina p
        LEFT JOIN user u
        ON p.email = u.email
        WHERE u.id IS NULL
    ";

    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['ukupno_anonimnih'];
    } else {
        return 'Greška prilikom prebrojavanja anonimnih kupaca!';
    }
}

function getCountAdmin($totalAdmin){

    global $con;
    $query = "SELECT * FROM $totalAdmin WHERE role='admin'";
    $query_run = mysqli_query($con,$query);
    
    if($query_run){
        $countTotal = mysqli_num_rows($query_run);
    
        return $countTotal;
    }else{
        return 'Nesto nije u redu !';
    }
    }
function getCountNews($totalNews){

    global $con;
    $query = "SELECT * FROM $totalNews ";
    $query_run = mysqli_query($con,$query);
        
    if($query_run){
        $countTotal = mysqli_num_rows($query_run);
        
        return $countTotal;
    }else{
        return 'Nesto nije u redu !';
    }
    }
function getCountSale($totalSale){

        global $con;
        $query = "SELECT * FROM $totalSale";
        $query_run = mysqli_query($con,$query);
            
        if($query_run){
            $countTotal = mysqli_num_rows($query_run);
            
            return $countTotal;
        }else{
            return 'Nesto nije u redu !';
        }
        } 
        
        
// Ukupno porudžbina u poslednjem mesecu
function brojPorudzbinaTab() {
    global $con;
    // Upit za brojanje porudžbina u poslednjem mesecu (tekući mesec)
    $query = "SELECT COUNT(*) AS ukupno_porudzbina
              FROM porudzbina
              WHERE MONTH(datum_porudzbine) = MONTH(CURDATE())
                AND YEAR(datum_porudzbine) = YEAR(CURDATE())";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['ukupno_porudzbina'];
    } else {
        return 'Greška prilikom prebrojavanja porudžbina!';
    }
}

 function getCountMessage($totalMessage){

            global $con;
            $query = "SELECT * FROM $totalMessage";
            $query_run = mysqli_query($con,$query);
            
            if($query_run){
                $countTotal = mysqli_num_rows($query_run);
            
                return $countTotal;
            }else{
                return 'Nesto nije u redu !';
            }
            }  
function getCountProduct($totalProducts){

                global $con;
                $query = "SELECT * FROM $totalProducts";
                $query_run = mysqli_query($con,$query);
                
                if($query_run){
                    $countTotal = mysqli_num_rows($query_run);
                
                    return $countTotal;
                }else{
                    return 'Nesto nije u redu !';
                }
                }    



// Prodaja po mesecima
function getSalesByMonth() {
    global $con;
    $query = "SELECT MONTH(datum_porudzbine) AS mesec, COUNT(*) AS ukupno
              FROM porudzbina
              GROUP BY MONTH(datum_porudzbine)
              ORDER BY mesec";
    $result = mysqli_query($con, $query);

    $meseci = [];
    $prodaja = [];
    while($row = mysqli_fetch_assoc($result)) {
        $meseci[] = $row['mesec'];
        $prodaja[] = $row['ukupno'];
    }
    return ['meseci' => $meseci, 'prodaja' => $prodaja];
}



// Najprodavaniji kolač
function getTopProducts() {
    global $con;

    // Ispravi SQL upit
    $query = "SELECT p.naziv, SUM(pp.kolicina) AS ukupno
              FROM stavke_porudzbine pp
              JOIN proizvod p ON pp.proizvod_id = p.id
              JOIN porudzbina pr ON pp.porudzbina_id = pr.id
              GROUP BY pp.proizvod_id
              ORDER BY ukupno DESC
              LIMIT 5";
    
    // Izvršavanje upita
    $result = mysqli_query($con, $query);
    
    // Inicijalizacija nizova za naziv i količinu proizvoda
    $nazivi = [];
    $kolicine = [];
    
    // Proveri da li ima podataka u rezultatu
    if (mysqli_num_rows($result) > 0) {
        // Učitavanje podataka u nizove
        while ($row = mysqli_fetch_assoc($result)) {
            $nazivi[] = $row['naziv'];
            $kolicine[] = $row['ukupno'];
        }
    } else {
        echo "<script>console.log('No top products found.');</script>";
    }
    
    // Vraćanje rezultata
    return ['nazivi' => $nazivi, 'kolicine' => $kolicine];
}
// Prodaja po kategorijama u proteklom mesecu
function getSalesByCategoryLastMonth() {
    global $con;
    $query = "SELECT p.kategorija, SUM(pp.kolicina) AS ukupno
              FROM stavke_porudzbine pp
              JOIN proizvod p ON pp.proizvod_id = p.id
              JOIN porudzbina pr ON pp.porudzbina_id = pr.id
              WHERE MONTH(pr.datum_porudzbine) = MONTH(CURDATE())
              GROUP BY p.kategorija";
    $result = mysqli_query($con, $query);
    $categories = [];
    $totals = [];
    while($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row['kategorija'];
        $totals[] = $row['ukupno'];
    }
    return ['categories' => $categories, 'totals' => $totals];
}

// Tabela – ukupno napravljeno i prodato poslednjih 5 godina
// Funkcija koja vraća prodaju proizvoda u poslednjih 5 godina
function getProductStatsLast5Years() {
    global $con;
    $query = "SELECT p.naziv, p.kategorija,
                     SUM(COALESCE(pp.kolicina, 0)) AS ukupno_prodato
              FROM proizvod p
              LEFT JOIN stavke_porudzbine pp ON pp.proizvod_id = p.id
              LEFT JOIN porudzbina pr ON pp.porudzbina_id = pr.id 
                   AND pr.datum_porudzbine >= DATE_SUB(CURDATE(), INTERVAL 5 YEAR)
              GROUP BY p.id";
    $result = mysqli_query($con, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// Porudžbine – mesečna prodaja poslednje godine
function getOrdersByMonthLastYear() {
    global $con;
    $query = "SELECT MONTH(datum_porudzbine) AS mesec, COUNT(*) AS ukupno
              FROM porudzbina
              WHERE datum_porudzbine >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
              GROUP BY MONTH(datum_porudzbine)
              ORDER BY mesec";
    $result = mysqli_query($con, $query);
    $months = [];
    $totals = [];
    while($row = mysqli_fetch_assoc($result)) {
        $months[] = $row['mesec'];
        $totals[] = $row['ukupno'];
    }
    return ['months' => $months, 'totals' => $totals];
}




//Porudzbina po mesecima
function getOrdersByDate($year, $month) {
    global $con;

    // Prvo, uzmi postojeće podatke iz baze (kao što je bilo)
    $sql = "SELECT DAY(datum_porudzbine) AS dan, COUNT(*) AS ukupno
            FROM porudzbina
            WHERE YEAR(datum_porudzbine) = ?
              AND MONTH(datum_porudzbine) = ?
            GROUP BY DAY(datum_porudzbine)
            ORDER BY DAY(datum_porudzbine)";

    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $year, $month);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Kreiraj mapu postojećih dana (za brže traženje)
    $existingData = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $existingData[$row['dan']] = $row['ukupno'];
    }

    // Odredi broj dana u mesecu (koristi PHP-ovu funkciju)
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // Kreiraj niz za sve dane (1 do $daysInMonth), sa ukupno = 0 ako nema podataka
    $podaci = [];
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $ukupno = isset($existingData[$day]) ? $existingData[$day] : 0;
        $podaci[] = ['dan' => $day, 'ukupno' => $ukupno];
    }

    return $podaci;
}
//Proizvodi po mesecima
function getSalesByCategory($year, $month) {
    global $con;
    $query = "SELECT p.kategorija, SUM(pp.kolicina) AS ukupno
          FROM stavke_porudzbine pp
          JOIN proizvod p ON pp.proizvod_id = p.id
          JOIN porudzbina pr ON pp.porudzbina_id = pr.id
          WHERE YEAR(pr.datum_porudzbine) = ? AND MONTH(pr.datum_porudzbine) = ?
          GROUP BY p.kategorija
          ORDER BY MONTH(pr.datum_porudzbine) DESC";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ii", $year, $month);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = [
            "category" => $row["kategorija"],
            "total" => intval($row["ukupno"])
        ];
    }

    return $data;
}


?>




