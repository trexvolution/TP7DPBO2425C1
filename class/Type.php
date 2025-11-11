<?php
require_once __DIR__ . '/../config/db.php';

class Type {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM type");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name) {
        $stmt = $this->conn->prepare("INSERT INTO type (name) VALUES (?)");
        return $stmt->execute([$name]);
    }
}
?>
