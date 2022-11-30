<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mypdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br />";
    
    $sql = "CREATE TABLE myguests(
    id INT (6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(70) NOT NULL,
    last_name VARCHAR(70) NOT NULL,
    email VARCHAR(200) NOT NULL,
    reg_date TIMESTAMP)";
    $conn->exec($sql);
    
    echo "Table myguest created successfully <br />";
} catch(PDOException $e) {
    echo "Connected failed " . $e->getMessage() . "<br />";
}

$conn = null;
?>