<?php

declare(strict_types=1);

$baseDir = APP_ROOT . '/../';
$dotenv = Dotenv\Dotenv::createImmutable($baseDir);
if (file_exists($baseDir . '.env')) {
    $dotenv->load();
}

var_dump(getenv("APP_DEV_MODE"));
var_dump(getenv("DB_HOST"));
var_dump(getenv("DB_PORT"));
var_dump(getenv("DB_USER"));
var_dump(getenv("DB_PASS"));
var_dump(getenv("DB_NAME"));
var_dump(getenv("DB_CHARSET"));
var_dump(getenv("DOCTRINE_DRIVER"));
var_dump(getenv("DOCTRINE_METADATA_DIR"));


$dotenv->required([
    "APP_DEV_MODE",

])->isBoolean();

$dotenv->required([
    "DB_HOST", "DB_PORT", "DB_USER", "DB_PASS", "DB_NAME", "DB_CHARSET",
    "DOCTRINE_DRIVER", "DOCTRINE_METADATA_DIR",
]);
