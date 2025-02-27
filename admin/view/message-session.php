
<?php



if(isset($_SESSION["message"])):
?>
<div class="custom-alert">
<strong> <?= $_SESSION['message']?></strong>
<div



<?php
unset($_SESSION['message']);
endif;
?>