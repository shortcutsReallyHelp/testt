<?php

require __DIR__ . '/vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

// Database connection parameters
$connectionParams = [
    'dbname' => getenv('DB_NAME'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'host' => getenv('DB_HOST'),
    'driver' => 'pdo_pgsql',
];

$conn = DriverManager::getConnection($connectionParams);

$conn->connect();

function main(array $args): array
{
    return ["body" => "Hello"];
}
