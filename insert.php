<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mypdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br />";
    $sql = "INSERT INTO myguests(first_name, last_name, email) VALUES('John', 'Doe', 'john@example.com')";
    $conn->exec($sql);
    echo "NEW RECORD CREATED SUCCESSFULLY <br />";
} catch(PDOException $e) {
    echo "Failed : " . $e->getMessage() . "<br />";
}

$conn = null;
