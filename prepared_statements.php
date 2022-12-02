<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mypdo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected Successfully <br />";

  $stmt = $conn->prepare( "INSERT INTO myguests(first_name, last_name, email) VALUES(:firstname, :lastname, :email)");
  $stmt->bindParam(":firstname", $firstname);
  $stmt->bindParam(":lastname", $lastname);
  $stmt->bindParam(":email", $email);

  // inserting the first record
  $firstname = "Agenaton";
  $lastname = "Chocho";
  $email = "chochomayoki@gmail.com";
  $stmt->execute();

  // inserting the second record
  $firstname = "Agenaton";
  $lastname = "Member";
  $email = "agenatonmember@yahoomail.com";
  $stmt->execute();

  // inserting the third record
  $firstname = "Agenaton";
  $lastname = "Terfa";
  $email = "agenatonterfa@gamil.com";
  $stmt->execute();

  // inserting the fourth record
  $firstname = "Agenaton";
  $lastname = "David";
  $email = "agenatondave@gmail.com";
  $stmt->execute();

  echo "New Records Created Successfully <br />";

} catch (PDOException $e) {
  echo "Connection failed : " . $e . "<br />";
}

$conn = null;
 ?>
