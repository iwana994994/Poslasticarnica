<?php
include_once(__DIR__ . "/../config/database.php");

class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Funkcija koja proverava korisnika u bazi
    public function authenticate($username, $password) {
         // Pretraži bazu po korisničkom imenu
    $stmt = $this->pdo->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Ako korisnik postoji i lozinka je tačna
    if ($user && $password == $user['password']) {
        return $user;
    } else {
        return false;
    }
}
}

?>