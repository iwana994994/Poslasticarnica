<?php


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

?>




