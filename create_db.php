<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br />";
    
    $sql = "CREATE DATABASE myPDO";
    $conn->exec($sql);
    echo "DATABASE CREATED successfully <br />";
} catch (PDOException $e) {
    echo "Connection Failed : " . "<br />" . $e->getMessage() . "<br />";
}

$conn = null;
?>