<?php

$config = require(__DIR__ . '/config.php');

$test = 5;

$connection = new Mysqli(
    $config['HOST_NAME'],
    $config['USERNAME'],
    $config['PASSWORD'],
    $config['DATABASE_NAME']
);

if (mysqli_connect_errno()) {
    printf("MySQLi connection failed: ", mysqli_connect_error());
    exit();
}

// Change character set to utf8
if (!$connection->set_charset('utf8mb4')) {
    printf('Error loading character set utf8: %s\n', $connection->error);
}
