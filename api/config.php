<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="thenbteam"; // Database name 
$tbl_name="Fotografer"; // Table name 


/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=thenbteam;host=localhost';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
