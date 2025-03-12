<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/pocetna.css">
    <title>Document</title>
</head>
<body>
    <h1>Dobro dosli na admin panel</h1>
    <div class="container">
        <div class="card-heder">
            <a href="/Poslasticarnica/admin/admin-dashboard.php?page=korisnici">
            <h1>Ukupno korisnika</h1>
        </div>
        <div class="card-body">
            <?= getCount('user');?>
        </div>
        </a>
        </div>

        <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=proizvodi">
            <h1>Ukupno proizvoda</h1>
        </div>
        <div class="card-body">
            <?= getCountProduct('proizvod');?>
        </div>
        </a>
    </div>
       
        <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=upravljajAdminima">
            <h1>Ukupno admina</h1>
        </div>
        <div class="card-body">
            <?= getCountAdmin('user');?>
        </div>
        </a>
    </div>

    <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=vesti">
            <h1>Ukupno vesti</h1>
        </div>
        <div class="card-body">
            <?= getCountNews('vesti');?>
        </div>
        </a>
    </div>

    <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=akcije">
            <h1>Ukupno akcija</h1>
        </div>
        <div class="card-body">
            <?= getCountSale('akcije');?>
        </div>
        </a>
    </div>

    <div class="container">
        <div class="card-heder">
        <a href="/Poslasticarnica/admin/admin-dashboard.php?page=poruke">
            <h1>Ukupno poruka</h1>
        </div>
        <div class="card-body">
            <?= getCountMessage('poruka');?>
        </div>
    </a>
    </di>
</body>
</html>