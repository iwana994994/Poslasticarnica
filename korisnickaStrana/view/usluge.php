<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/usluge.css">
    <title>Poslastičarnica</title>
    </head>
<body>
    <section>
        <h1 id="naslov">Usluge</h1>
        <div class="conteiner"> 
            <?php foreach ($usluge as $usluga): ?>
                <div class="service-box">
                    <a href="/Poslasticarnica/korisnickaStrana/view/usluga.php?id=<?= $usluga['id'] ?>">
                        <img src="<?= $usluga['slika'] ?>" class="service-img">
                        <div class="description">                           <h2 class="service-title"><?= $usluga['naziv'] ?></h2>
                            <p class="service-description"><?= $usluga['opis'] ?></p> 
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
