<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/usluge.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/windowForServicePop.js"></script>
    <title>Poslastičarnica</title>
    </head>
<body id="body">

    <section>
        <h1 id="naslov">Usluge</h1>
        <div class="container"> 
            <?php foreach ($usluge as $usluga): ?>
                <div class="service-box">
                    <a href="index.php?page=usluga&id=<?= $usluga['id'] ?>">
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
