<?php
session_start();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if (isset($_SESSION['korpa'][$id])) {
        unset($_SESSION['korpa'][$id]);
    }
}

header("Location: /Poslasticarnica/korpa");
exit;
?>
