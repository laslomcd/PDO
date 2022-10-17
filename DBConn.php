<?php

class DBConn {
    const SERVERNAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'murphy#1';
    const DBNAME = 'classicmodels';


    /**
     * @var PDO
     */
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:dbname=" . self::DBNAME .";host=" . self::SERVERNAME ."", self::USERNAME, self::PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }
}

