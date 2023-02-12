<?php
function initpdo()
{
    $database = getenv("PHP_MYSQL_DBNAME");
    $host = getenv("PHP_MYSQL_HOSTNAME");
    $port = getenv("PHP_MYSQL_PORT");
    $user = getenv("PHP_MYSQL_USER");
    $passwd = getenv("PHP_MYSQL_PASSWORD");
    return new PDO("mysql:host=$host;dbname=$database;port=$port", $user, $passwd);
}
