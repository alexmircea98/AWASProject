<?php // common.php
 
function print_login(){
	if(!isset($_SESSION['user'])):
	?>

	                                            <li class="login"><a href="login.php">
	                                                <i class="ti-user"></i> Sign in or Register</a>
	<?php 
	else: 
	?>
	                                            <li style="color:red">Welcome, <?php echo $_SESSION['user']; ?> 
	                                            </li>
	                                            <li><a href="logout.php">Log out</a></li>
	<?php 
	endif;
}


function error($msg) {
?>
<html>
<head>
  <script language="JavaScript">
  <!--
  alert("<?=$msg?>");
  history.back();
  //-->
  </script>
</head>
<body>
</body>
</html>
<?
exit;
}
?>
