
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/pocetna.css">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/proizvodi.css">

    <script src="/Poslasticarnica/korisnickaStrana/public/js/slide.js" ></script>
    <script src="/Poslasticarnica/korisnickaStrana/public/js/window-for-product-pop.js"></script>


    <title>Pocetna</title>
</head>
<body>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php foreach ($proizvod5 as $proizvod): ?>
            <div class="swiper-slide">
            <a href="index.php?page=proizvod&id=<?= $proizvod['id'] ?>">
           
                <img src="<?= $proizvod['slika']; ?>" >
                <h3><?= $proizvod['naziv']; ?></h3>
                <p><?= $proizvod['opis']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

      <!-- Dugmad za navigaciju -->
      <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>

   
    

    <!-- dugme KUPI-->
  
    <a href="/Poslasticarnica/proizvodi ?>">
    <button id="buy-button">Kupi</button>
</a>




<!-- Proizvodi na akciji -->

<h1 id="sale-title"> Akcije</h1>
<div class="conteiner">
        <!-- Loop through all products -->
        <?php foreach ($proizvod5 as $proizvod): ?>
            <div class="product-box">
                <img src="<?= $proizvod['slika'] ?>" class="product-img"> <!-- Slika proizvoda -->
                <div class="description">
                    <h2 class="product-title"><?= ($proizvod['naziv']) ?></h2> <!-- Naziv proizvoda -->
                   
                </div>
            </div>
                
        <?php endforeach; ?>
    </div>

</body>


</html>