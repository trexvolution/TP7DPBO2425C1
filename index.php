<?php
include 'view/header.php';

$entity = $_GET['entity'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$path = "view/$entity/$action.php";
if (file_exists($path)) {
    include $path;
} else if ($entity === 'home') {
    echo "<h2>Selamat datang di Database Pokémon Card!</h2>";
    echo "<p>Pilih menu di atas untuk melihat data.</p>";
} else {
    echo "<h3>Halaman tidak ditemukan.</h3>";
}

include 'view/footer.php';
?>
