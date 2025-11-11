<?php
require_once __DIR__ . '/../../class/Type.php';
$type = new Type();

// Handle delete
if (isset($_GET['delete'])) {
    $type->delete($_GET['delete']);
    header("Location: ?entity=type");
    exit;
}

$data = $type->getAll();
?>

<h2>Daftar Type</h2>
<a href="?entity=type&action=create">+ Tambah Type</a>
<table>
    <tr><th>ID</th><th>Nama</th><th>Aksi</th></tr>
    <?php foreach ($data as $t): ?>
        <tr>
            <td><?= $t['id'] ?></td>
            <td><?= $t['name'] ?></td>
            <td>
                <a href="?entity=type&action=edit&id=<?= $t['id'] ?>">Edit</a> |
                <a href="?entity=type&delete=<?= $t['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
