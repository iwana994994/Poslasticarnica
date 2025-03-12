<?php

// Uključivanje potrebnih datoteka
include_once './korisnickaStrana/config/database.php'; 
include_once './korisnickaStrana/model/ProizvodModel.php'; 
include_once './korisnickaStrana/model/LogInModel.php'; 
include_once './korisnickaStrana/model/KontaktModel.php'; 
include_once './korisnickaStrana/model/VestiModel.php'; 
include_once './korisnickaStrana/model/UslugeModel.php'; 
include_once './korisnickaStrana/model/AkcijaModel.php';

include_once './korisnickaStrana/view/nav-bar.php'; 


include_once './korisnickaStrana/view/message-session.php';


//<! ------------------Pozivanje loginModel.php ------------------------------------------->



// Uzimanje parametra iz URL-a
$page = isset($_GET['page']) ? $_GET['page'] : 'pocetna';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Upravljačka logika
switch ($page) {
    case 'pocetna':
        include './korisnickaStrana/view/pocetna.php';
        break;
    case 'proizvodi':
        include './korisnickaStrana/view/svi-proizvodi.php'; 
        break;
    case 'proizvod':
            if ($id > 0) {
                $proizvod = getProizvodById($con, $id);
                if ($proizvod) {
                    include './korisnickaStrana/view/proizvod.php';
                } else {
                    die("Greška: Proizvod nije pronađen.");
                }
            } else {
                die("Greška: Neispravan ID proizvoda.");
            }
            break;
    case 'kontakt':
        include './korisnickaStrana/view/kontakt.php';
        break;
    case 'usluge':
        include './korisnickaStrana/view/usluge.php';
        break;
    case 'usluga':
        if ($id > 0) {
            $usluga= getUslugeById($con, $id);
            if ($usluga) {
                include './korisnickaStrana/view/usluga.php';
            } else {
                die("Greška: Usluge nisu pronadjene.");
            }
            } else {
                die("Greška: Neispravan ID usluga.");
            }
        break;
    case 'vesti':
        include './korisnickaStrana/view/vesti.php';
        break;
    case 'vest':
        if ($id > 0) {
            $vest = getVestById($con, $id);
            if ($vest) {
                include './korisnickaStrana/view/vest.php';
            } else {
                die("Greška: Vest nije pronađena.");
            }
            } else {
                die("Greška: Neispravan ID vesti.");
            }
        break;
    case 'akcije':
        $akcije = $akcija5; // Assigned 5 recent sale items from AkcijaModel.php to show on the Akcije page
        include './korisnickaStrana/view/akcije.php';
        break;
    case 'akcija':
        if ($id > 0) {
            $akcija = getAkcijaById($con, $id);
            if ($akcija) {
                include './korisnickaStrana/view/akcija.php';
            } else {
                die("Greška: Akcija nije pronađena.");
            }
            } else {
                die("Greška: Neispravan ID akcije.");
            }
        break;
    case 'login':
        include './korisnickaStrana/view/login.php';
        break;
    case 'logout':
        include './korisnickaStrana/view/logout.php';
        break;
    case 'registracija':
        include './korisnickaStrana/view/registracija.php';
        break;
    default:
         include './korisnickaStrana/view/404.php';
        break;
}
include_once './korisnickaStrana/view/footer.php';
?>
