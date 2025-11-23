
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <link rel="stylesheet" href="./public/pop-up.css">
    <script src="./public/js/porudzbineTab.js"></script> 
    <link rel="stylesheet" href="./public/message-session.css">
    <title>Porudžbine po mesecu</title>
    <style>
        /* Dodatni stilovi za navigaciju meseca */
        .mesec-nav {
            margin-bottom: 20px;
            text-align: center;
        }
        .mesec-nav form {
            display: inline-block;
        }
        .mesec-nav button {
            margin: 0 10px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Porudžbine u mesecu: <?= htmlspecialchars($naziv_meseca) ?> <?= $trenutna_godina ?></h1>
    
    <!-- Navigacija za promenu meseca -->
    <div class="mesec-nav">
        <form method="GET" style="display: inline;">
            <label for="mesec">Izaberite mesec:</label>
            <select name="mesec" id="mesec">
                <option value="1" <?= ($trenutni_mesec == 1) ? 'selected' : '' ?>>Januar</option>
                <option value="2" <?= ($trenutni_mesec == 2) ? 'selected' : '' ?>>Februar</option>
                <option value="3" <?= ($trenutni_mesec == 3) ? 'selected' : '' ?>>Mart</option>
                <option value="4" <?= ($trenutni_mesec == 4) ? 'selected' : '' ?>>April</option>
                <option value="5" <?= ($trenutni_mesec == 5) ? 'selected' : '' ?>>Maj</option>
                <option value="6" <?= ($trenutni_mesec == 6) ? 'selected' : '' ?>>Jun</option>
                <option value="7" <?= ($trenutni_mesec == 7) ? 'selected' : '' ?>>Jul</option>
                <option value="8" <?= ($trenutni_mesec == 8) ? 'selected' : '' ?>>Avgust</option>
                <option value="9" <?= ($trenutni_mesec == 9) ? 'selected' : '' ?>>Septembar</option>
                <option value="10" <?= ($trenutni_mesec == 10) ? 'selected' : '' ?>>Oktobar</option>
                <option value="11" <?= ($trenutni_mesec == 11) ? 'selected' : '' ?>>Novembar</option>
                <option value="12" <?= ($trenutni_mesec == 12) ? 'selected' : '' ?>>Decembar</option>
            </select>
            
            <label for="godina">Godina:</label>
            <select name="godina" id="godina">
                <option value="2023" <?= ($trenutna_godina == 2023) ? 'selected' : '' ?>>2023</option>
                <option value="2024" <?= ($trenutna_godina == 2024) ? 'selected' : '' ?>>2024</option>
                <option value="2025" <?= ($trenutna_godina == 2025) ? 'selected' : '' ?>>2025</option>
                <!-- Dodajte više godina po potrebi -->
            </select>
            
            <button type="button" id="loadDataButton">Prikaži</button>

        </form>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>ID Porudžbine</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                
                <th>Telefon</th>
                <th>Datum porudžbine</th>
               
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($porudzbine)): ?>
                <?php foreach ($porudzbine as $porudzbina): ?>
                    <tr>
                        <td><?= htmlspecialchars($porudzbina['id']) ?></td>
                        <td><?= htmlspecialchars($porudzbina['ime']) ?></td>
                        <td><?= htmlspecialchars($porudzbina['prezime']) ?></td>
                        <td><?= htmlspecialchars($porudzbina['email']) ?></td>
                     
                        <td><?= htmlspecialchars($porudzbina['telefon']) ?></td>
                        <td><?= htmlspecialchars($porudzbina['datum_porudzbine']) ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">Nema porudžbina u ovom mesecu.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
</body>
</html>