<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poslastičarnica</title>
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/footer.css">   
</head>
<body>
    <footer class="footer">
        <div class="footer-logo">
            <img src="/Poslasticarnica/korisnickaStrana/public/slike/Poslastičarnica.png" alt="Poslastičarnica logo">
        </div>
        <div class="footer-links">
            <a href="/contact">Kontakt</a>
            <a href="/services">Usluge</a>
            <a href="/faq">FAQ</a>
            <a href="/privacy">Privatnost & Politika</a>
        </div>
        <div class="social-media">
            <!-- Ikone društvenih mreža -->
            <a href="https://facebook.com"><img src="facebook.png" alt="Facebook"></a>
            <a href="https://instagram.com"><img src="instagram.png" alt="Instagram"></a>
        </div>
    </footer>

    <?php
    // Fali baza sa kojom treba da se uvezu linkovi za kontakt itd 

    $companyName = "Poslastičarnica";
    echo "<!-- Footer generisan PHP-om: " . $poslasticarnica . " -->";
    ?>
</body>
</html>