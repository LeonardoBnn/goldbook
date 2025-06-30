<?php

include("./bdd/bdd.php");
include('view/commun/header.php');


// le routing
$page = isset($_GET['page']) ? $_GET['page'] : 'consultation';

switch ($page) {
    case 'config':
        include('view/signature.php');
        break;


    default:
        include('view/consultations.php');
        break;
}



include('view/commun/footer.php');


?>