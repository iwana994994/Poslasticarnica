<?php


// Učitaj podatke o korpi (ako postoji)
$korpa = isset($_SESSION['korpa']) ? $_SESSION['korpa'] : [];
$dostava = 300;
$ukupno = 0;

// Izračunavanje ukupne cene
foreach ($korpa as $item) {
    $ukupno += $item['cena'] * $item['kolicina'];
}
$ukupno_placanje = $ukupno + ($ukupno > 0 ? $dostava : 0);


?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korpa - Cake-Coffee Shop</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/korpa.css">
    
</head>

<body>
<div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Poslasticarnica/index.php?page=pocetna">Početna /</a></li>
              </ol>
</div>
  <div class="cart-container">
        <h2>Tvoja korpa</h2>
         <?php if (!empty($korpa)): ?>
    <table class="cart-table">
        <thead>
            <tr>
                <th>Slika</th>
                <th>Proizvod</th>
                <th>Cena (RSD)</th>
                <th>Količina</th>
                <th>Ukupno</th>
                <th>Ukloni</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($korpa as $id => $item): ?>
            <tr>
                <td><img src="/Poslasticarnica/<?= htmlspecialchars($item['slika']) ?>" width="60"></td>
                <td><?= htmlspecialchars($item['naziv']) ?></td>
                <td><?= number_format($item['cena'], 2) ?></td>
                <td><?= $item['kolicina'] ?></td>
                <td><?= number_format($item['cena'] * $item['kolicina'], 2) ?></td>
                <td>
                    <form method="POST" action="/Poslasticarnica/korisnickaStrana/view/ukloniIzKorpe.php" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <button type="submit" class="remove-btn">✖</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="cart-summary">
        <p><strong>Ukupno proizvoda:</strong> <?= number_format($ukupno, 2) ?> RSD</p>
        <p><strong>Dostava:</strong> <?= $ukupno > 0 ? $dostava : 0 ?> RSD</p>
        <p><strong>Ukupno za plaćanje:</strong> <?= number_format($ukupno_placanje, 2) ?> RSD</p>
        <a href="#checkoutForm" class="checkout-btn">Nastavi na plaćanje</a>
    </div>

    <?php else: ?>
        <p style="text-align:center; font-size:18px;">🧁 Vaša korpa je prazna.</p>
    <?php endif; ?>
</div>

   <!-- Forma za isporuku -->
<div id="checkoutForm" class="checkout-form">
    <h3>Podaci za isporuku</h3>
    <form action="/Poslasticarnica/korisnickaStrana/controller/posaljiPorudzbinu.php" method="POST">
        <label>Ime:</label>
        <input type="text" name="ime" required>

        <label>Prezime:</label>
        <input type="text" name="prezime" required>

        <label>Adresa:</label>
        <input type="text" name="adresa" required>

        <label>Telefon:</label>
        <input type="text" name="telefon" required>

        <label>Način plaćanja:</label>
        <select name="nacin_placanja" required>
            <option value="gotovina">Gotovina prilikom dostave</option>
            <option value="kartica">Platna kartica</option>
        </select>

        <input type="hidden" name="korpa_podaci" value='<?= json_encode($korpa) ?>'>

        <button type="submit" class="submit-btn">Pošalji narudžbinu</button>
    </form>
</div>
    
</html>