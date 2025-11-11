<?php
require_once __DIR__ . '/../../class/Series.php';
$series = new Series();

$id = $_GET['id'] ?? null;
$data = $id ? $series->getById($id) : ['series'=>'', 'release_date'=>''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($id) $series->update($id, $_POST['series'], $_POST['release_date']);
    else $series->create($_POST['series'], $_POST['release_date']);
    header("Location: ?entity=series");
    exit;
}
?>
<h2><?= $id ? 'Edit' : 'Tambah' ?> Series</h2>
<form method="post">
    <label>Nama Series:</label><br>
    <input type="text" name="series" value="<?= $data['series'] ?>" required><br>
    <label>Tanggal Rilis:</label><br>
    <input type="date" name="release_date" value="<?= $data['release_date'] ?>"><br><br>
    <button type="submit">Simpan</button>
    <a href="?entity=series">Batal</a>
</form>
