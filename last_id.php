<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mypdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br />";
    
    $sql = "INSERT INTO myguests(first_name, last_name, email) VALUES('james', 'pet', 'jamespet@gmail.com')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New Record Inserted Successfully <br /> : " . "Last ID : " . $last_id . "<br />";
} catch(PDOException $e) {
    "Failed : " . $e->getMessage() . "<br />";
}

$conn = null;
