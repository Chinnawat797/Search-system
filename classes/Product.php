<?php
    class Product {
        private $conn;
        private $table = "products";

        public function __construct($db) {
            $this->conn = $db;
        }

        public function search($keyword) {
            $sql = "SELECT * FROM {$this->table} WHERE name LIKE :keyword OR category LIKE :keyword";
            $stmt = $this->conn->prepare($sql);
            $keyword = "%$keyword%";
            $stmt->bindParam(":keyword", $keyword);
            $stmt->execute();
            return $stmt;
        }
    }
?>