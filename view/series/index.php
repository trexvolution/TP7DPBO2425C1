<?php
require_once __DIR__ . '/../../class/Series.php';
$series = new Series();

if (isset($_GET['delete'])) {
    $series->delete($_GET['delete']);
    header("Location: ?entity=series");
    exit;
}

$data = $series->getAll();
?>
<h2>Daftar Series</h2>
<a href="?entity=series&action=create">+ Tambah Series</a>
<table>
<tr><th>ID</th><th>Nama Series</th><th>Release Date</th><th>Aksi</th></tr>
<?php foreach ($data as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= $s['series'] ?></td>
    <td><?= $s['release_date'] ?></td>
    <td>
        <a href="?entity=series&action=edit&id=<?= $s['id'] ?>">Edit</a> |
        <a href="?entity=series&delete=<?= $s['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
