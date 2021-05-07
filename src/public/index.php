<?php declare(strict_types = 1);

use App\config\DatabaseConnector;

define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR . '/bootstrap/app.php';

$dbConnection = (new DatabaseConnector())->getConnection();

var_dump($dbConnection);