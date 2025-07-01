<?php
require_once(__DIR__ . '/../model/userModel.php');

class SignatureController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function ajouterSignature()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("<p style='color:red'>Token CSRF invalide, veuillez recharger la page.</p>");
            }

            if (!empty($_POST['website'])) {
                die("<p style='color:red'>Spam détecté.</p>");
            }

            if (isset($_SESSION['last_submit']) && (time() - $_SESSION['last_submit']) < 10) {
                die("<p style='color:red'>Veuillez patienter avant de soumettre à nouveau.</p>");
            }
            $_SESSION['last_submit'] = time();

            $nom = substr(htmlspecialchars($_POST['nom'] ?? ''), 0, 100);
            $prenom = substr(htmlspecialchars($_POST['prenom'] ?? ''), 0, 100);
            $mail = filter_var($_POST['mail'] ?? '', FILTER_VALIDATE_EMAIL);
            $numero = substr(htmlspecialchars($_POST['numero'] ?? ''), 0, 20);
            $sex = htmlspecialchars($_POST['sex'] ?? '');
            $commentaire = substr(htmlspecialchars($_POST['commentaire'] ?? ''), 0, 500);
            $signature = substr(htmlspecialchars($_POST['signature'] ?? ''), 0, 100);

            if (!$mail) {
                die("<p style='color:red'>Email invalide.</p>");
            }

            if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($numero) && !empty($sex) && !empty($commentaire) && !empty($signature)) {
                $this->userModel->ajouterSignature($nom, $prenom, $mail, $numero, $sex, $commentaire, $signature);
                header('Location: index.php?page=consultation');
                exit;
            } else {
                echo "<p style='color: red;'>Merci de remplir tous les champs.</p>";
            }
        }
    }

    public function afficherSignatures()
    {
        return $this->userModel->getAllSignatures();
    }
}

?>