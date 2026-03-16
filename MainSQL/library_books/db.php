<?php
$host = 'localhost';
$dbname = 'mydb';
$user = 'root';
$password = '';
try {
    $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "". $e->getMessage() ."";
    die("Connection failed: ". $e->getMessage());
}



?>