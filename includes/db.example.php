<?php
$db_host = 'localhost';
$db_name = 'your_database';
$db_user = 'your_user';
$db_pass = 'your_password';

function db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $dsn = 'mysql:host=' . $GLOBALS['db_host'] . ';dbname=' . $GLOBALS['db_name'] . ';charset=utf8mb4';
    $pdo = new PDO($dsn, $GLOBALS['db_user'], $GLOBALS['db_pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    return $pdo;
}
