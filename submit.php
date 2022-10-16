
<?php
include 'lab.html';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab2";
//get name from myForm and store it in $name
$name = $_POST['fname'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (name, email)
VALUES ('$name', '$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>