<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/usluge.css">
    <title>Poslastičarnica</title>
</head>
<body>
    <section>
        <h1 id="naslov">Poslastičarnica Usluge</h1>
        <div class="conteiner">
            <!-- Loop through all services -->
            <?php foreach ($usluge as $usluga): ?>
                <div class="services-box">
                <a href="./korisnickaStrana/view/usluga.php?id=<?= $usluga['id'] ?>" >
                    <img src="<?= $usluga['slika'] ?>" class="sevices-img"> <!-- Slika za usluge -->
                    <div class="description">
                        <h2 class="services-title"><?= $usluga['naziv'] ?></h2> <!-- Naziv usluge -->
                        <h3 class="services-description"><?=$usluga['opis'] ?></h3> <!-- Opis usluge -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
