<?php
session_start();
$dbHost = 'localhost';
$dbName = 'trading';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>