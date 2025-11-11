<?php
require_once __DIR__ . '/../config/db.php';

class Card {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $sql = "SELECT card.code, card.name, type.name AS type_name, series.series AS series_name
                FROM card
                JOIN type ON card.type_id = type.id
                JOIN series ON card.series_id = series.id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
