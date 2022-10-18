<?php

class ClassicModels
{

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllLastNames()
    {
        $lastNames = $this->db->conn->query("SELECT lastName FROM employees");
        $lastNames->execute();
        return $lastNames->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllFirstNames()
    {
        $firstNames = $this->db->conn->query("SELECT firstName FROM employees");
        $firstNames->execute();
        return $firstNames->fetchAll(PDO::FETCH_ASSOC);

    }


}