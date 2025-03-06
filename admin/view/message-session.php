
<?php
if(isset($_SESSION["message"])):
?>
<div class="custom-alert">
<strong> <?= $_SESSION['message']?></strong>
<div>
<?php
unset($_SESSION['message']);
endif;
?>

<?php 
if (isset($_SESSION['errors'])): 
?> 
    <div class="custom-alert2">
        <?php foreach ($_SESSION['errors'] as $error): ?> 
            <strong>* <?= $error ?></strong><br> 
        <?php endforeach; ?>
    </div>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>