<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'DBConn.php';
include 'ClassicModels.php';


$data = new DBConn();
$names = new ClassicModels($data);
$names->getLastName();
$names->getFirstNames();