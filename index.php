<?php
require_once(__DIR__ . '/controller/SignatureController.php');

$controller = new SignatureController();
$page = $_GET['page'] ?? 'signature';

require_once(__DIR__ . '/view/commun/header.php');

if ($page === 'signature') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->ajouterSignature();
    }
    require_once(__DIR__ . '/view/signature.php');
} elseif ($page === 'consultation') {
    $signatures = $controller->afficherSignatures();
    require_once(__DIR__ . '/view/consultations.php');
} else {
    echo "<h2>Page non trouvée</h2>";
}

require_once(__DIR__ . '/view/commun/footer.php');
?>