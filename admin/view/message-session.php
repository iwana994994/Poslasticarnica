<?php
if (isset($_SESSION["message"])):
    $class = strpos($_SESSION['message'], 'uspešno') !== false ? 'success' : 'error';
?>
    <div class="custom-alert <?php echo $class; ?>">
        <strong><?= htmlspecialchars($_SESSION['message']) ?></strong>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
<?php
    unset($_SESSION['message']);
endif;
?>

<!--Popravila sam kod malo:

1. Ispravila sintaksu i dodala dugme za zatvaranje
2. Dodala dinamicko dodeljivanje klase na osnovu sadrzaja poruke
3. Ubacila htmlspecialchars za sigurnost -->