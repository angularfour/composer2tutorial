<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
$entidades = array("src/");
// database configuration parameters
$conn = array(
    'driver' => 'pdo_pgsql',
    'user' => 'useradm',
    'password' => '123',
    'dbname' => 'doctrinedb',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);