<?php

include RM_RESOURCES . '/classes/ClassicModels.php';

class Controller
{
    /**
     * @var DBConn
     */
    private $db;
    /**
     * @var mixed
     */
    private $sitePage;

    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        require_once 'DBConn.php';
        $parsed = parse_ini_file(RM_RESOURCES . '/config/credentials.env');
        $this->db = new DBConn($parsed);

        $this->setProperties();
    }

    private function setProperties()
    {
        echo $this->getSitePage();

        if($this->sitePage = 'lastName') {
            $results = $this->getLastNames();
            include RM_RESOURCES . '/views/_selectLastName.php';
        } elseif ($this->sitePage = 'firstName') {
            echo 'Here';
            $results = $this->getFirstNames();
            var_dump($results);
//            include RM_RESOURCES . '/views/_selectFirstName.php';
        }
    }

    public function getSitePage()
    {
        $this->sitePage = $_GET['sitePage'];
        return $this->sitePage;
    }

    private function getLastNames()
    {
        $lastNames = new ClassicModels($this->db);
        return $lastNames->getAllLastNames();
    }

    private function getFirstNames()
    {
        $firstNames = new ClassicModels($this->db);
        return $firstNames->getAllFirstNames();
    }


}