<?php
include 'view/header.php';

$entity = $_GET['entity'] ?? 'home';

switch ($entity) {
    case 'type':
        include 'view/Type.php';
        break;
    case 'series':
        include 'view/Series.php';
        break;
    case 'card':
        include 'view/Card.php';
        break;
    default:
        echo "<h2>Selamat datang di Database Pokémon Card!</h2>";
        echo "<p>Pilih menu di atas untuk melihat data.</p>";
        break;
}

include 'view/footer.php';
?>
