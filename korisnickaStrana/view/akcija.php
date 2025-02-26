<?php
require '../config/database.php';
require '../models/Product.php';

$productModel = new Product($pdo);
$akcije = $productModel->getDiscountedProducts();
?>


<body>
    <?php include 'header.php'; ?>

    <div class="head-box">
            <h1>
               Akcija
            </h1>

    <div class="conteiner">
        <?php foreach ($akcije as $proizvod): ?>
            <div class="product">
                <img src="../public/images/<?= htmlspecialchars($proizvod['image']) ?>" class="product-img">
                <h2 class="product-title"><?= htmlspecialchars($proizvod['name']) ?></h2>
                <h3 class="product-price"><s><?= htmlspecialchars($proizvod['price']) ?> RSD</s>
                 <?= htmlspecialchars($proizvod['discount_price']) ?> RSD</h3>
                <input type="number" class="quantity" value="1">
                <a href="../korpa/korpa.php?id=<?= $proizvod['id'] ?>" class="shopping">Ubaci u korpu</a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
