<?php 

if(isset($_SESSION["message2"])):
?>
<div class="custom-alert2">
<strong> <?= $_SESSION['message2']?></strong>
</div>



<?php
unset($_SESSION['message2']);
endif;
?>