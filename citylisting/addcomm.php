<?php // signup.php
include_once 'db_connect.php';
include_once 'common.php';
include_once 'accesscontrol.php';

if(!isset($_SESSION['user']))
  header("Location: index.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (!isset($_POST['message'],$_POST['subject'])){
      error('One or more required fields were left blank.\n Please fill them in and try again.');
    }

    // $email = trim($_POST['subject']);
    // $name = trim($_POST['name']);
    // $password = trim($_POST['message']);

    $query="INSERT INTO Message (subject, name_location, description) VALUES(?,?,?)"; 

    if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param("sss",$_POST['subject'] ,$_POST['comm_loc'],$_POST['message']);
      $stmt->execute();
      $stmt->close();
    } else error("Internal error.");

 header("Location: display.php?loc=".$_POST['comm_loc']);
 
}


?>
