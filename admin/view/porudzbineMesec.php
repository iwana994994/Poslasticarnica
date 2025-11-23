<?php
// Preuzmi mesec i godinu
$month = $_GET['month'] ?? date('n');
$year = $_GET['year'] ?? date('Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz porudžbina</title>
    <link rel="stylesheet" href="style.css"> <!-- Poželjno je dodati CSS za stilizovanje -->
</head>
<body>

<h1>Porudžbine za mesec: <span id="month-year"><?php echo $month . '-' . $year; ?></span></h1>

<!-- Form for selecting month and year -->
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

<!-- Prikaz podataka u tabeli -->
<div id="orders-table">
    <!-- Ovdje će biti učitani podaci putem AJAX-a -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>