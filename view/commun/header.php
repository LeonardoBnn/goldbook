<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'Or</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php?page=signature">Signer</a>
            <a href="index.php?page=consultation">Consulter</a>
        </nav>
    </header>
    <br><br>