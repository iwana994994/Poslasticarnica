
<?php
// PHP kod za dobijanje podataka

// Prodaja po mesecima
$salesData = getSalesByMonth();
$meseci = json_encode($salesData['meseci']);  // [1, 2, 3, ...]
$prodaja = json_encode($salesData['prodaja']); // [12, 19, 3, ...]

// Najprodavaniji kolači
$topProductsData = getTopProducts();
$naziviKolaca = json_encode($topProductsData['nazivi']); // ["Čoko", "Vanila", ...]
$kolicineKolaca = json_encode($topProductsData['kolicine']); // [10, 5, ...]
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/pocetna.css">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="./public/js/charts.js" defer></script> 
     
 
   
   

    <title>Document</title>
</head>
<body>
    <h1>Dobro dosli na admin panel</h1>
    <div class="container">
        <div class="card-heder">
            <a href="/Poslasticarnica/admin/admin-dashboard.php?page=korisnici">
            <h1 class="kartica">Ukupno korisnika</h1>
        </div>
        <div class="card-body">
            <?= getCount('user');?>
        </div>
        </a>
        </div>

        <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=proizvodi">
            <h1 class="kartica">Ukupno proizvoda</h1>
        </div>
        <div class="card-body">
            <?= getCountProduct('proizvod');?>
        </div>
        </a>
    </div>
       
        

    <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=vesti">
            <h1 class="kartica">Ukupno vesti</h1>
        </div>
        <div class="card-body">
            <?= getCountNews('vesti');?>
        </div>
        </a>
    </div>

    <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=akcije">
            <h1 class="kartica">Ukupno akcija</h1>
        </div>
        <div class="card-body">
            <?= getCountSale('akcije');?>
        </div>
        </a>
    </div>

    <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=poruke">
            <h1 class="kartica">Ukupno poruka</h1>
        </div>
        <div class="card-body">
            <?= getCountMessage('poruka');?>
        </div>
    </a>
    </div>
 <!-- GRAFOVI -->
  <div class="pre-grafa">
<div class="graf">
      <h2 >Prodaja po mesecima</h2>
    <canvas  id="barChart"></canvas>

</div>

    
<div class="graf">
    <h2>Trend prodaje</h2>
    <canvas  id="lineChart"></canvas>
    </div>
<div class="graf1">
    <h2>Najprodavaniji kolači</h2>
    <canvas id="pieChart"></canvas>
    </div>
</div>
    



    <!-- PHP podaci u data atributima -->
    <div id="meseci" data-value='<?= $meseci ?>'></div>
    <div id="prodaja" data-value='<?= $prodaja ?>'></div>
    <div id="naziviKolaca" data-value='<?= $naziviKolaca ?>'></div>
    <div id="kolicineKolaca" data-value='<?= $kolicineKolaca ?>'></div>
</body>
<script>
    // Provera da li se podaci ispravno prosleđuju
    console.log("Meseci:", <?= $meseci ?>);
    console.log("Prodaja:", <?= $prodaja ?>);
    console.log("Nazivi kolača:", <?= $naziviKolaca ?>);
    console.log("Količine kolača:", <?= $kolicineKolaca ?>);

</script>


</html>