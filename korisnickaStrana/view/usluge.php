<?php 
include_once __DIR__ . '/../model/UslugeModel.php'; 
?>
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
            <?php 
            // Ensure $usluge is an array
            if (!isset($usluge) || !is_array($usluge)) {
                $usluge = [];
            }
            if (empty($usluge)): ?>
                <p style="color: red;">Nema dostupnih usluga.</p>
            <?php else: ?>
                <?php foreach ($usluge as $usluga): ?>
                    <div class="services-box">
                    <a href="./korisnickaStrana/view/usluga.php?id=<?= htmlspecialchars($usluga['id']) ?>" >
                        <img src="<?= htmlspecialchars($usluga['slika']) ?>" class="services-img" alt="<?= htmlspecialchars($usluga['naziv']) ?>"> <!-- Fixed class name -->
                        <div class="description">
                            <h2 class="services-title"><?= htmlspecialchars($usluga['naziv']) ?></h2> <!-- Naziv usluge -->
                            <h3 class="services-description"><?= htmlspecialchars($usluga['opis']) ?></h3> <!-- Opis usluge -->
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>