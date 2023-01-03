<?php

namespace core;

$dsn = 'mysql:host=' . DB_HOST . '; dbname=' . DB_NAME . ';charset=utf8';

try {
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}