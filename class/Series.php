<?php
require_once __DIR__ . '/../config/db.php';

class Series {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM series ORDER BY release_date");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM series WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($series, $release) {
        $stmt = $this->conn->prepare("INSERT INTO series (series, release_date) VALUES (?, ?)");
        return $stmt->execute([$series, $release]);
    }

    public function update($id, $series, $release) {
        $stmt = $this->conn->prepare("UPDATE series SET series=?, release_date=? WHERE id=?");
        return $stmt->execute([$series, $release, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM series WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>
