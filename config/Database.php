<?php
    class Database {
        private $host = "localhost";
        private $db_name = "products";
        private $username = "root";
        private $password = "";
        private $conn;

        public function connect() {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $e) {
                die("Connection Failed" . $e->getMessage());
            }

            return $this->conn;
        }
    }
?>