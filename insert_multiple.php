<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mypdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br />";

    $conn->beginTransaction();

    $conn->exec("INSERT INTO myguests(first_name, last_name, email) VALUES('Peter', 'Pan', 'peterpan@gmail.com') ");
    $conn->exec("INSERT INTO myguests(first_name, last_name, email) VALUES('Collins', 'Ecady', 'collinsecady@gmail.com') ");
    $conn->exec("INSERT INTO myguests(first_name, last_name, email) VALUES('Scarfy', 'Paul', 'shiepaul@gmail.com') ");

    $conn->commit();
    echo "Records Inserted Successfully <br />";
} catch (PDOException $e) {
    $conn->rollback();
    echo "Failed : " . $e->getMessage();
}

$conn = null;
