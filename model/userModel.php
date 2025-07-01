<?php
require_once(__DIR__ . '/../bdd/bdd.php');

class UserModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getPDO();
    }

    public function ajouterSignature($nom, $prenom, $mail, $numero, $sex, $commentaire, $signature)
    {
        $sql = "INSERT INTO user (nom, prenom, mail, numero, sex, commentaire, signature) VALUES (:nom, :prenom, :mail, :numero, :sex, :commentaire, :signature)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':commentaire', $commentaire);
        $stmt->bindParam(':signature', $signature);
        return $stmt->execute();
    }

    public function getAllSignatures()
    {
        $sql = "SELECT id, nom, prenom, mail, numero, sex, commentaire, signature FROM user ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>