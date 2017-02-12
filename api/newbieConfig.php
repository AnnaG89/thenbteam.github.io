<?php
$host = 'mysql525.loopia.se'; 
$db = 'zocomutbildning_se_db_3';
$user = 'newbie@z164407';
$password = '12n3wbie67';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false];
try {
	$pdo = new PDO($dsn, $user, $password, $options);
} catch(PDOException $error){
	echo $error->getMessage();
}
?>