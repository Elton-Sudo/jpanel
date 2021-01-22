<?php

$settings = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$connection = new PDO("mysql:host=localhost;dbname=webcounter_db", 'root', '', $settings);

$query = $connection->prepare('INSERT INTO `pageview` (`ip`, `created`) VALUES (?, NOW())');
$parameters= array($_SERVER['REMOTE_ADDR']);
$query->execute($parameters);


?>
