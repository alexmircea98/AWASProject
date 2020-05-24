<?php // signup.php
include_once 'db_connect.php';
include_once 'common.php';
include_once 'accesscontrol.php';

if(isset($_SESSION['user']))
  header("Location: index.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (!isset($_POST['message'],$_POST['subject'])){
      error('One or more required fields were left blank.\n Please fill them in and try again.');
    }

    // $email = trim($_POST['subject']);
    // $name = trim($_POST['name']);
    // $password = trim($_POST['message']);

    $query="INSERT INTO Mesasage (subject, name_location, description) VALUES(?,?,?)"; 

    if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param("sss",$_POST['subject'] ,$_POST['comm_loc'],$_POST['message']);comm_loc
      $stmt->execute();
      $stmt->close();
    } else error($conn->prepare($query))
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title> Submission Complete </title>
    <meta http-equiv="Content-Type"
    content="text/html; charset=iso-8859-1" />
    </head>
    <body>
    <center><p><strong>Submission successful for messaege <?php echo $name; ?>!</strong></p></center>
     <center>To log in,
    click <a href="login.php">here</a> to return to the login
    page, and enter your user and password.</p></center>
    </body>
    </html>
<?php

}