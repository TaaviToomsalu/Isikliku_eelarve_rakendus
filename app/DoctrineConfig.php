<?php


use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = [__DIR__ . '/../src/Entities'];
$isDevMode = getenv('APP_DEV_MODE');

// the connection configuration
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'foo',
];


$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);


return $entityManager;