<?php

const RM_HTML = '/Internet/Apache/html.pdo';
const RM_RESOURCES = '/Internet/Apache/resources.pdo';

class DBConn {

    /**
     * @var PDO
     */
    public $conn;

    public function __construct()
    {
        $parsed = parse_ini_file(RM_RESOURCES . '/config/credentials.env');
        try {
            $this->conn = new PDO("mysql:dbname=" . $parsed['DBNAME'] .";host=" . $parsed['SERVERNAME'] ."", $parsed['USERNAME'], $parsed['PASSWORD']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }
}

