<?php
$dsn = 'mysql:dbname=lampstack;host=database';
$user = 'root';
$password = 'root';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}
echo '<h1>Test database complete!</h1>';
echo '<h1>Database Infomation</h1>';
echo '<h2>Host: database</h2>';
echo '<h2>Databse Default: lampstack</h2>';
echo '<h2>User: root</h2>';
echo '<h2>Password: root</h2>';
