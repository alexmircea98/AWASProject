<?php // signup.php
include_once 'db_connect.php';
include_once 'common.php';
include_once 'accesscontrol.php';

if(isset($_SESSION['user']))
  header("Location: index.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (!isset($_POST['email'], $_POST['name'], $_POST['psw'],$_POST['psw-repeat'])){
      error('One or more required fields were left blank.\n Please fill them in and try again.');
    }

    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $password = trim($_POST['psw']);

    if(empty($email) || empty($name) || empty($password) ){
      error('One or more required fields were left blank.\n Please fill them in and try again.');
    }

    if (!($_POST['psw']==$_POST['psw-repeat'])) {
    error('Passwords does not match.\n Please fill them in and try again.');
    }

    $email=filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      error("Please provide a valid email address.");

    $name=filter_var($name, FILTER_SANITIZE_STRING);
    if (!filter_var($name, FILTER_SANITIZE_STRING)) 
      error("Please provide a valid name.");

    if(strlen($name)>50)
      error("Username too long!");

    if(strlen($email)>50)
      error("Email too long!");

    if(strlen($password)>50)
      error("Passowrd too long!");


    $query= 'SELECT id_user FROM Person WHERE email = ?';
    if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->store_result();
      if ($stmt->num_rows > 0) {
          error('There is already a registered account with your email.\n Please check agian your email or reset your password.');
      }
      $stmt->close();
    }

    $query="INSERT INTO Person (name, email, password) VALUES(?,?,?)"; 

    if ($stmt = $conn->prepare($query)) {
      $pass_hash=hash('sha256', $password . 'decamp');
      $stmt->bind_param("sss",$name ,$email,$pass_hash);
      $stmt->execute();
      $stmt->close();
    } else error("Internal server error.")
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title> Registration Complete </title>
    <meta http-equiv="Content-Type"
    content="text/html; charset=iso-8859-1" />
    </head>
    <body>
    <center><p><strong>Registration successful for user <?php echo $name; ?>!</strong></p></center>
     <center>To log in,
    click <a href="login.php">here</a> to return to the login
    page, and enter your user and password.</p></center>
    </body>
    </html>
<?php

} else {?>


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form method="post" action="/signup.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter User Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
      <button type="submit"  name="submitok" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>

<?php }?>