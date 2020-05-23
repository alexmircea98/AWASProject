<?php 
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$db_name = 'myDb';
$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*
Test of usage (see dump/myDb.sql)
$sql = "SELECT id, name FROM Person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
*/