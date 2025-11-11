<?php
require_once __DIR__ . '/../config/db.php';

class Series {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM series");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
