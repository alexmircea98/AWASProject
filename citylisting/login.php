<?php // login.php
include 'common.php';
include 'db_connect.php';

if (!isset($_POST['submitok'])):
    // show prev page
    echo " not goof ";
else:

 $user = $_POST['name'];
 $pass = hash('sha256', $_POST['psw'] . 'decamp');

 $sql = "SELECT * FROM Person WHERE name = '$user' and password = '$pass'";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 error('Success');
 }

 //add session values $_SESSION['id'] and $_SESSION['pwd'], see accesscontrol
 //add accesscontrol where it should be ... ma ocum maine
?>