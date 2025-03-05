
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
    <h1 id="naslov">Poslastičarnica Vesti</h1>
    <div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($vesti as $vest): ?>
            <div class="newsBox" onclick="openModal(<?= $vest['id'] ?>)">
                <img src="<?= $vest['slika'] ?>" class="news-img"> <!-- Opis za vesti -->
                <div class="description" >
                    <h2 class="newsTitle"><?= ($vest['naziv']) ?></h2> <!-- Naziv vesti -->
                    <h3 class="newsDescription"><?= ($vest['opis']) ?></h3> <!-- Opis vesti -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<!-- Modal (skriven na početku) -->
<<?php foreach ($vesti as $vest): ?>
    <div id="modal-<?= $vest['id'] ?>" class="windowForNews">
        <div class="modal-content">
            
            <img src="<?= $vest['slika'] ?>"  id="modalNewsImage">
    
            <div id="NewsDescription">
            <h2><?= ($vest['naziv']) ?></h2>
            <p><?= ($vest['opis']) ?></p>

            
            </div>
            <span class="close" onclick="closeModal(<?= $vest['id'] ?>)">&times;</span>

        </div>
    </div>
<?php endforeach; ?>


</section>
</body>
</html>