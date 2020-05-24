<?php // common.php
include_once 'accesscontrol.php';
include 'db_connect.php';

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
<?php
exit;
}




function print_location(){

global $conn;

$sql = "SELECT * FROM Location";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
<div class="col-lg-6 ">
    <div class="single-listing mb-30">
        <div class="list-img">
            <img src=<?php echo "\"".$row["image"]."\""?> alt="">
        </div>
        <div class="list-caption">
            <span><a href=<?php echo "\"display.php?loc=" .$row["name"] . "\""?> >Open</a></span>
            <h3><?php echo $row["name"]?></h3>
            <p><?php echo $row["description"]?></p>

        </div>
    </div>
</div>


<?php


  }
} else {
	error("Internal error: Location database empty.");
}

}

