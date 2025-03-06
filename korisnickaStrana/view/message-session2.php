<?php 
if(isset($_SESSION["message2"])):
?>


<div class="custom-alert3">
<strong> <?= $_SESSION['message2']?></strong>
</div>

<?php
unset($_SESSION['message2']);
endif;
?>



<?php 
if (isset($_SESSION['errors'])): 
?>

    <div id="custom-alert2">

        <?php foreach ($_SESSION['errors'] as $error): ?> 
            <strong>* <?= $error ?></strong><br> 
        <?php endforeach; ?>
    </div>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>

