<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/vesti.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/windowForNewsPop.js"></script>
    <title>Poslastičarnica</title>
</head>
<body>
    <section>
        <h1 id="naslov">Vesti</h1>
        <div class="container"> 
            <?php foreach ($vesti as $vest): ?>
                <div class="news-box">
                    <a href="/Poslasticarnica/korisnickaStrana/view/vest.php?id=<?= $vest['id'] ?>">
                        <img src="<?= $vest['slika'] ?>" class="news-img">
                        <div class="description">
                            <h2 class="news-title"><?= $vest['naziv'] ?></h2>
                            <p class="news-description"><?= $vest['opis'] ?></p> 
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>