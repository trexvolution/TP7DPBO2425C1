<?php
require_once __DIR__ . '/../class/Card.php';
$card = new Card();
$data = $card->getAll();
?>

<h2>Daftar Card Pokémon</h2>
<table>
    <tr><th>Code</th><th>Name</th><th>Type</th><th>Series</th></tr>
    <?php foreach ($data as $c): ?>
        <tr>
            <td><?= $c['code'] ?></td>
            <td><?= $c['name'] ?></td>
            <td><?= $c['type_name'] ?></td>
            <td><?= $c['series_name'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
