<?php include 'app/view/layout/header.php'; 

$page = $_GET['page'] ?? 'inicio';

switch ($page) {
    case 'eventos':
        include 'app/view/page/eventos.php';
        break;
    case 'inicio':
    default:
        include 'app/view/page/inicio.php';
        break;
}

include 'app/view/layout/footer.php'; ?>