<?php
require_once __DIR__ . '/../class/Type.php';
$type = new Type();
$data = $type->getAll();
?>

<h2>Daftar Type</h2>
<table>
    <tr><th>ID</th><th>Name</th></tr>
    <?php foreach ($data as $t): ?>
        <tr><td><?= $t['id'] ?></td><td><?= $t['name'] ?></td></tr>
    <?php endforeach; ?>
</table>
