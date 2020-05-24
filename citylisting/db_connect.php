<?php 
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$db_name = 'myDb';
$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//Test database:
$sql = "SELECT id_user, name,email, password FROM Person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_user"]. " - Name: " . $row["name"].  " - Email: " . $row["email"]. " - Password: " . $row["password"]."<br>";
  }
} else {
  echo "0 results";
}


function dbConnect($db="") {
  global $host, $user, $pass;
   
  $dbcnx = @mysql_connect($host, $user, $pass)
  or die("The site database appears to be down.");
   
  if ($db!="" and !@mysql_select_db($db))
  die("The site database is unavailable.");
   
  return $dbcnx;
  }
  ?>