<?php

class ClassicModels
{

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getLastName()
    {
        $lastNames = $this->db->conn->query("SELECT lastName FROM employees");
        $lastNames->execute();
        $results = $lastNames->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getFirstNames()
    {
        $firstNames = $this->db->conn->query("SELECT firstName FROM employees");
        $firstNames->execute();
        $results = $firstNames->fetchAll();
        return $results;
    }


}