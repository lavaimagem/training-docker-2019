<?php

$host = 'mysql';
$db   = 'sakila';
$user = 'root';
$pass = '123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$result = $pdo->query("show databases");

echo "<h3>Databases in System</h3><br>";
while ($row = $result->fetch()) {
    echo $row['Database'] ."<br>";

}
