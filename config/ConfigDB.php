<?php
    
    // Class for Database

    class Database {
        // Properties
        public $host = "localhost:3308";
        public $user = "root";
        public $pass = "";
        public $db = "evs";
        public $conn;

        // Constructor
        public function __construct() {
            $this->conn = $this->dbConnection();
        }

        // Methods

        // Database connection

        public function dbConnection() {
            $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            return $conn;
        }

        // test if connection is successful
        public function testConnection() {
            if ($this->conn) {
                echo "Connection successful!";
            } else {
                echo "Connection failed!";
            }
        }


    }
?>