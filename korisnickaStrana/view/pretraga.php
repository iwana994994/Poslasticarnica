<?php
// korisnickaStrana/view/pretraga.php

// vrednosti za popunjavanje forme
$q = isset($_GET['q']) ? $_GET['q'] : '';

$selected_kategorije = (isset($_GET['kategorija']) && is_array($_GET['kategorija']))
    ? $_GET['kategorija']
    : [];

$cena_od = isset($_GET['cena_od']) ? $_GET['cena_od'] : '';
$cena_do = isset($_GET['cena_do']) ? $_GET['cena_do'] : '';

// lista kategorija (value => label) – OVO USKLADI SA BAZOM!!! 
$kategorije = [
    'vocna'     => 'Voćne torte i pite',
    'cokoladna' => 'Čokoladne torte',
    'krempita'  => 'Krempite',
    'pistac'    => 'Pistać poslastice',
    'visnja'    => 'Deserti sa višnjom',
    'med'       => 'Poslastice od meda',
    'tart'      => 'Tartovi',
    'cizkejk'   => 'Čizkejk',
    'kesten'    => 'Kesten kolači',
    'medenjaci' => 'Medenjaci',
    'mafini'    => 'Mafini',
    'kokos'     => 'Kokos poslastice',
    'cimet'     => 'Deserti sa cimetom',
    'krofne'    => 'Krofne',
];



// naslov i action zavise od stranice na kojoj smo
// (varijabla $page dolazi iz index.php switch-a)
$page_title  = ($page === 'proizvodi') ? 'Proizvodi' : 'Pretraga';
$heading     = ($page === 'proizvodi') ? 'Proizvodi' : 'Rezultati pretrage';

// oba slučaja idu na index.php, samo menjamo "page" param
$form_action = '/Poslasticarnica/index.php';
$form_page   = ($page === 'proizvodi') ? 'proizvodi' : 'pretraga';


?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?> - Cake-Coffee Shop</title>

    <!-- koristimo postojeći stil kartica + mali stil za layout pretrage -->
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvodi.css">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/pretraga.css">
    <script src="/Poslasticarnica/korisnickaStrana/public/js/sesion-add-product.js"></script>
</head>
<body id="body">


<div class="search-layout">

    <!-- LEVA STRANA – FILTERI -->
    <aside class="search-sidebar">
        <h2>Filter</h2>

            <form method="get" action="<?= htmlspecialchars($form_action) ?>" class="filter-form">
                 <input type="hidden" name="page" value="<?= htmlspecialchars($form_page) ?>">
                 

            <!-- Tekstualna pretraga -->
            <div class="filter-group">
                <label for="q">Pretraga</label>
                <input type="search"
                       id="q"
                       name="q"
                       placeholder="Npr. čokolada, voćna..."
                       value="<?= htmlspecialchars($q) ?>">
            </div>

            <!-- Kategorije -->
            <div class="filter-group">
                <span class="filter-title">Kategorija</span>

                <?php foreach ($kategorije as $value => $label): ?>
                    <label class="checkbox-label">
                        <input type="checkbox"
                               name="kategorija[]"
                               value="<?= htmlspecialchars($value) ?>"
                            <?= in_array($value, $selected_kategorije) ? 'checked' : '' ?>>
                        <?= htmlspecialchars($label) ?>
                    </label>
                <?php endforeach; ?>
            </div>

            <!-- Cena -->
            <div class="filter-group">
                <span class="filter-title">Cena (RSD)</span>
                <div class="price-range">
                    <div>
                        <label for="cena_od">od</label>
                        <input type="number"
                               id="cena_od"
                               name="cena_od"
                               min="0"
                               step="10"
                               value="<?= htmlspecialchars($cena_od) ?>">
                    </div>
                    <div>
                        <label for="cena_do">do</label>
                        <input type="number"
                               id="cena_do"
                               name="cena_do"
                               min="0"
                               step="10"
                               value="<?= htmlspecialchars($cena_do) ?>">
                    </div>
                </div>
            </div>

            <button type="submit" class="filter-submit">Pretraži</button>
        </form>
    </aside>

    <!-- DESNA STRANA – REZULTATI -->
    <section class="search-results">
        <h1 id="naslov"><?= htmlspecialchars($heading) ?></h1>


        <p>
            Pronađeno proizvoda:
            <strong><?= count($proizvodi) ?></strong>
        </p>

        <?php if (empty($proizvodi)): ?>
            <p>Nema proizvoda koji odgovaraju zadatim filterima.</p>
        <?php else: ?>
            <div class="conteiner">
                <?php foreach ($proizvodi as $proizvod): ?>
                    <div class="product-box">
                        <a href="/Poslasticarnica/index.php?page=proizvod&id=<?= $proizvod['id'] ?>">
                            <img src="/Poslasticarnica/<?= htmlspecialchars($proizvod['slika']) ?>"
                                 class="product-img">
                            <div class="description">
                                <h2 class="product-title">
                                    <?= htmlspecialchars($proizvod['naziv']) ?>
                                </h2>
                                <h3 class="product-price">
                                    <?= htmlspecialchars($proizvod['cena']) ?> RSD
                                </h3>
                            </div>
                        </a>

                        <input type="number" class="quantity" value="1" min="1" max="50">

                        <button class="shopping2"
                                data-id="<?= $proizvod['id'] ?>"
                                data-naziv="<?= htmlspecialchars($proizvod['naziv']) ?>"
                                data-cena="<?= $proizvod['cena'] ?>"
                                data-slika="<?= htmlspecialchars($proizvod['slika']) ?>">
                            Ubaci u korpu
                        </button>

                        <p class="cart-message" style="color:green; margin-top:5px;"></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>

</div>

</body>
</html>
