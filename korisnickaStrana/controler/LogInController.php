<?php
session_start();
include_once(__DIR__ . "/../model/ProizvodModel.php");
include_once __DIR__ . '/../model/UserModel.php';


class LoginController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new UserModel($pdo);
    }

    public function login ($username, $password) {
        $user = $this->userModel->authenticate($username, $password);

        if ($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Preusmeravanje u zavisnosti od uloge
            if ($user['role'] == 'admin') {
                header('Location: ../../admin/admin-nav.php');
                exit;
            } else {
                header('Location: ../template/pocetna.php');
                exit;
            }
            
        } else {
            echo "Neispravno korisničko ime ili lozinka.";
        }
    }
}

if ($_POST) {
    $loginController = new LoginController($pdo);
    $loginController->login($_POST['username'], $_POST['password']);
}
?>
