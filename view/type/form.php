<?php
require_once __DIR__ . '/../../class/Type.php';
$type = new Type();

$id = $_GET['id'] ?? null;
$data = $id ? $type->getById($id) : ['name' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($id) {
        $type->update($id, $_POST['name']);
    } else {
        $type->create($_POST['name']);
    }
    header("Location: ?entity=type");
    exit;
}
?>

<h2><?= $id ? 'Edit' : 'Tambah' ?> Type</h2>
<form method="post">
    <label>Nama Type:</label><br>
    <input type="text" name="name" value="<?= $data['name'] ?>" required>
    <br><br>
    <button type="submit">Simpan</button>
    <a href="?entity=type">Batal</a>
</form>
