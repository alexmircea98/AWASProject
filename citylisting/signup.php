<?php // signup.php
include 'common.php';
include 'db_connect.php';

if (!isset($_POST['submitok'])):
    // show prev page
    echo " not goof ";
else:
// Process signup submission
dbConnect('myDb');

if ($_POST['email']=='' or $_POST['name']==''
or $_POST['psw']=='' or $_POST['psw-repeat']=='') {
error('One or more required fields were left blank.\n'.
'Please fill them in and try again.');
}

if (!($_POST['psw']==$_POST['psw-repeat'])) {
error('Passwords does not match.\n'.
'Please fill them in and try again.');
}

 // Check for existing user with the new id
 $sql = "SELECT COUNT(*) FROM user WHERE Person = '$_POST[name]'";
 $result = mysql_query($sql);
 if (!$result) {
 error('A database error occurred in processing your '.
 'submission.\nIf this error persists, please '.
 'contact you@notme.com.');
 }
 if (@mysql_result($result,0,0)>0) {
 error('A user already exists with your chosen userid.\n'.
 'Please try another.');
 }

 $x=hash('sha256', $_POST[psw] . 'decamp');

 $sql = "INSERT INTO Person SET
user = '$_POST[name]',
email = '$_POST[email]',
password = '$x'";
if (!mysql_query($sql))
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact you@example.com.');
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
<p><strong>User registration successful!</strong></p>
To log in,
click <a href="login.html">here</a> to return to the login
page, and enter your user and password.</p>
</body>
</html>
<?php
endif;
?>