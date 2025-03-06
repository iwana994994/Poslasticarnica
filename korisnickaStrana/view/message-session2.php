<?php 

if(isset($_SESSION["message2"])):
?>
<link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/message-session.css">
<div class="custom-alert2">
<strong> <?= $_SESSION['message2']?></strong>
</div>



<?php
unset($_SESSION['message2']);
endif;
?>