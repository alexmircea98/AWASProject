<?php // login.php
include_once 'common.php';
include_once 'db_connect.php';
include_once 'accesscontrol.php';

if(isset($_SESSION['user']))
	header("Location: index.php");


if($_SERVER["REQUEST_METHOD"] == "POST"):
    if (!isset($_POST['name'], $_POST['psw']))
      error('One or more required fields were left blank.\n Please fill them in and try again.');

    $name = trim($_POST['name']);
    $password = trim($_POST['psw']);

    if(empty($name) || empty($password) )
      error('One or more required fields were left blank.\n Please fill them in and try again.');

    if(strlen($name)>50)
      error("Wrong username/passowrd combination.");

    if(strlen($password)>50)
      error("Wrong username/passowrd combination.");


    $query= 'SELECT name,password FROM Person WHERE name = ? AND password = ?';
    if ($stmt = $conn->prepare($query)) {
    	$pass_hash=hash('sha256', $password . 'decamp');
      	$stmt->bind_param("ss", $name,$pass_hash);
      	$stmt->execute();
      	$stmt->store_result();
      	if ($stmt->num_rows == 0) {
       	   error('Wrong username/passowrd combination.');
     	}
      $stmt->close();
    } else error('Unexpecter error.');

    // login sucessful
    session_regenerate_id(TRUE);
    $_SESSION['user']=$name;
    header("Location: index.php");
else:
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

span.psw1 {
  float: center;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="/login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
    <span class="psw1">You don't have an account? <a href="signup.php">Sign up Here</a></span>
  </div>
</form>

</body>
</html>
<?php endif ?>