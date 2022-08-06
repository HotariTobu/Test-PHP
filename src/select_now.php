<?php

$dsn = 'mysql:dbname=tb24;host=localhost';
$user = 'tb24';
$password = 'tb24';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql = "SELECT DATE_FORMAT(NOW(),'%Y/%m/%d %H:%i:%s')";
$sql = "SELECT NOW()";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// $date = $stmt->fetchAll();
$stmt = $pdo->query($sql);
$date = $stmt->execute();

echo $date;