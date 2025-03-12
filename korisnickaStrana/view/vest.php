<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $vest['naziv'] ?> - Poslastičarnica</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/vest.css">
</head>
<body>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=vesti">Vesti /</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $vest['naziv'] ?></li>
        </ol>
        </div>
    <div class="news-container">
        <img src="/Poslasticarnica/<?= $vest['slika'] ?>" class="news-img">
        <div class="news-info">
            <h2><?= $vest['naziv'] ?></h2>
            <p><?= $vest['opis'] ?></p>
        </div>
    </div>
</body>
</html>
