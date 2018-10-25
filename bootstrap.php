<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require __DIR__ . '/vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'password',
    'dbname'   => 'doctrine',
    'host' => 'mysql',
    'port' => '3306',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
