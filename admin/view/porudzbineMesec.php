<?php
// Preuzmi mesec i godinu iz URL-a, ili koristi trenutni mesec i godinu kao podrazumevane vrednosti
$month = $_GET['month'] ?? date('n');  // n daje broj meseca (1-12)
$year = $_GET['year'] ?? date('Y');    // Y daje godinu (npr. 2025)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz porudžbina</title>
    <link rel="stylesheet" href="./public/tabela.css">
     <script src="./public/js/porudzbineTab.js" defer></script> 
</head>
<body data-month="<?php echo $month; ?>" data-year="<?php echo $year; ?>">


<h1 class="title">Porudžbine za mesec: <span id="month-year"><?php echo $month . '-' . $year; ?></span></h1>

<!-- Forma za odabir meseca i godine -->
<form id="monthYearForm">
    <label for="month">Mesec:</label>
    <select name="month" id="month">
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <option value="<?php echo $i; ?>" <?php echo $i == $month ? 'selected' : ''; ?>>
                <?php echo date('F', mktime(0, 0, 0, $i, 10)); ?>
            </option>
        <?php endfor; ?>
    </select>

    <label for="year">Godina:</label>
    <select name="year" id="year">
        <?php for ($i = 2020; $i <= date('Y'); $i++): ?>
            <option value="<?php echo $i; ?>" <?php echo $i == $year ? 'selected' : ''; ?>>
                <?php echo $i; ?>
            </option>
        <?php endfor; ?>
    </select>

    <button type="submit">Prikaz</button>
</form>

<!-- Tabela za prikaz podataka o porudžbinama -->
<div id="orders-table">
    <!-- Podaci će biti učitani ovde putem AJAX-a -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>
</html>
