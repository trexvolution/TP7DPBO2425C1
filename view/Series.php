<?php
require_once __DIR__ . '/../class/Series.php';
$series = new Series();
$data = $series->getAll();
?>

<h2>Daftar Series</h2>
<table>
    <tr><th>ID</th><th>Series</th><th>Release Date</th></tr>
    <?php foreach ($data as $s): ?>
        <tr><td><?= $s['id'] ?></td><td><?= $s['series'] ?></td><td><?= $s['release_date'] ?></td></tr>
    <?php endforeach; ?>
</table>
