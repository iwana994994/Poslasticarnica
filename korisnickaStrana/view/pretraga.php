<?php
// korisnickaStrana/view/pretraga.php

// vrednosti za popunjavanje forme
$q = isset($_GET['q']) ? $_GET['q'] : '';
$selected_kategorije = isset($_GET['kategorija']) && is_array($_GET['kategorija'])
    ? $_GET['kategorija']
    : [];

$min_cena = isset($_GET['cena_od']) ? $_GET['cena_od'] : '';
$max_cena = isset($_GET['cena_do']) ? $_GET['cena_do'] : '';

// lista kategorija (value => label)
$kategorije = [
    'vocna'         => 'Voćne torte',
    'cokoladna'     => 'Čokoladne torte',
    'tiramisu'      => 'Tiramisu',
    'krempita'      => 'Krempita',
    'pistac'        => 'Pistać torta',
    'svarcvald'     => 'Švarcvald',
    'cizkejk'       => 'Čizkejk',
    'medena_pita'   => 'Medena pita',
    'limun'         => 'Limun / tart',
    'tri_cokolade'  => 'Tri čokolade',
    'kesten'        => 'Kesten torta',
    'medenjaci'     => 'Medenjaci',
];
?>

<link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/pretraga.css">

<main class="search-page">

    <!-- LEVA STRANA – FILTERI -->
    <aside class="search-sidebar">
        <h2>Filter</h2>

        <form method="get" action="/Poslasticarnica/pretraga" class="filter-form">

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
                               value="<?= htmlspecialchars($min_cena) ?>">
                    </div>
                    <div>
                        <label for="cena_do">do</label>
                        <input type="number"
                               id="cena_do"
                               name="cena_do"
                               min="0"
                               step="10"
                               value="<?= htmlspecialchars($max_cena) ?>">
                    </div>
                </div>
            </div>

            <button type="submit" class="filter-submit">Pretraži</button>
        </form>
    </aside>

    <!-- DESNA STRANA – REZULTATI -->
    <section class="search-results">
        <h1 class="results-title">Rezultati pretrage</h1>

        <p class="results-info">
            Pronađeno proizvoda: <strong><?= count($proizvodi) ?></strong>
        </p>

        <?php if (empty($proizvodi)): ?>
            <p>Nema proizvoda koji odgovaraju zadatim filterima.</p>
        <?php else: ?>
            <div class="results-grid">
                <?php foreach ($proizvodi as $p): ?>
                    <article class="product-card">
                        <img src="/Poslasticarnica/<?= htmlspecialchars($p['slika']) ?>"
                             alt="<?= htmlspecialchars($p['naziv']) ?>">

                        <h3 class="product-title"><?= htmlspecialchars($p['naziv']) ?></h3>
                        <p class="product-category">
                            <?= htmlspecialchars($p['kategorija']) ?>
                        </p>
                        <p class="product-desc">
                            <?= htmlspecialchars($p['opis']) ?>
                        </p>
                        <p class="product-price"><?= htmlspecialchars($p['cena']) ?> RSD</p>

                        <div class="product-actions">
                            <input type="number"
                                   class="quantity"
                                   value="1"
                                   min="1"
                                   max="50">
                            <button class="shopping2"
                                    data-id="<?= $p['id'] ?>"
                                    data-naziv="<?= htmlspecialchars($p['naziv']) ?>"
                                    data-cena="<?= $p['cena'] ?>"
                                    data-slika="<?= htmlspecialchars($p['slika']) ?>">
                                Ubaci u korpu
                            </button>
                        </div>

                        <p class="cart-message"></p>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<script src="/Poslasticarnica/korisnickaStrana/public/js/sesion-add-product.js"></script>

