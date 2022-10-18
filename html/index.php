<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../resources.pdo/classes/DBConn.php';
include '../resources.pdo/classes/ClassicModels.php';


$data = new DBConn();
$names = new ClassicModels($data);


$results = $names->getLastName();
include RM_RESOURCES . '/views/_selectLastName.php';
//$names->getFirstNames();

