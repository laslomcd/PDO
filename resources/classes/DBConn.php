<?php

class DBConn {

    /**
     * @var PDO
     */
    public $conn;

    public function __construct($parsed)
    {

        try {
            $this->conn = new PDO("mysql:dbname=" . $parsed['DBNAME'] .";host=" . $parsed['SERVERNAME'] ."", $parsed['USERNAME'], $parsed['PASSWORD']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }
}

