<?php
require_once __DIR__ . '/../../class/Card.php';
require_once __DIR__ . '/../../class/Type.php';
require_once __DIR__ . '/../../class/Series.php';

$card = new Card();
$type = new Type();
$series = new Series();

$types = $type->getAll();
$serieses = $series->getAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $card->create($_POST['code'], $_POST['name'], $_POST['type_id'], $_POST['series_id']);
    header("Location: ?entity=card");
    exit;
}
?>
<h2>Tambah Card Baru</h2>
<form method="post">
    <label>Kode:</label><br>
    <input type="text" name="code" required><br>
    <label>Nama Card:</label><br>
    <input type="text" name="name" required><br>
    <label>Type:</label><br>
    <select name="type_id">
        <?php foreach ($types as $t): ?>
        <option value="<?= $t['id'] ?>"><?= $t['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label>Series:</label><br>
    <select name="series_id">
        <?php foreach ($serieses as $s): ?>
        <option value="<?= $s['id'] ?>"><?= $s['series'] ?></option>
        <?php endforeach; ?>
    </select><br><br>
    <button type="submit">Simpan</button>
    <a href="?entity=card">Batal</a>
</form>
