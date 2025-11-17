<?php

include_once(__DIR__ . "/../config/database.php");

// Proveri da li postoji korpa i da li je POST zahtev
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['korpa']) && !empty($_SESSION['korpa'])) {
    
    // 1️⃣ Uzmemo podatke o kupcu
    $ime = mysqli_real_escape_string($con, $_POST['ime']);
    $prezime = mysqli_real_escape_string($con, $_POST['prezime']);
    $adresa = mysqli_real_escape_string($con, $_POST['adresa']);
    $telefon = mysqli_real_escape_string($con, $_POST['telefon']);
    $nacin_placanja = mysqli_real_escape_string($con, $_POST['nacin_placanja']);

    // 2️⃣ Ubacujemo porudžbinu u tabelu `porudzbina`
    $query = "INSERT INTO porudzbina (ime, prezime, adresa, telefon) 
              VALUES ('$ime', '$prezime', '$adresa', '$telefon')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $porudzbina_id = mysqli_insert_id($con);

        // 3️⃣ Ubacujemo svaku stavku u `stavke_porudzbine`
     $korpa = json_decode($_POST['korpa_podaci'], true);

foreach ($korpa as $stavka) {
    $proizvod_id = $stavka['id'];
    $kolicina = $stavka['kolicina'];
    $cena = $stavka['cena'];

    $query_stavka = "INSERT INTO stavke_porudzbine (porudzbina_id, proizvod_id, kolicina, cena)
                     VALUES ('$porudzbina_id', '$proizvod_id', '$kolicina', '$cena')";
    mysqli_query($con, $query_stavka);
}
    }
     // 4️⃣ Očistimo korpu
        unset($_SESSION['korpa']);

        $_SESSION['success_message'] = "🎉 Uspešno ste poslali porudžbinu! Hvala vam što ste poručili kod nas 💕";
         // Vrati korisnika na stranu korpe
         header("Location: /Poslasticarnica/index.php?page=korpa");
          exit;
}

  ?>