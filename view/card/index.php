<?php
require_once __DIR__ . '/../../class/Card.php';
require_once __DIR__ . '/../../class/Type.php';
require_once __DIR__ . '/../../class/Series.php';

$card = new Card();
$type = new Type();
$series = new Series();

if (isset($_GET['delete'])) {
    $card->delete($_GET['delete']);
    header("Location: ?entity=card");
    exit;
}

$data = $card->getAll();
?>
<h2>Daftar Card</h2>
<a href="?entity=card&action=create">+ Tambah Card</a>
<table>
<tr><th>Kode</th><th>Nama</th><th>Type</th><th>Series</th><th>Aksi</th></tr>
<?php foreach ($data as $c): ?>
<tr>
    <td><?= $c['code'] ?></td>
    <td><?= $c['name'] ?></td>
    <td><?= $c['type_name'] ?></td>
    <td><?= $c['series_name'] ?></td>
    <td><a href="?entity=card&delete=<?= $c['code'] ?>" onclick="return confirm('Yakin hapus card ini?')">Hapus</a></td>
</tr>
<?php endforeach; ?>
</table>
