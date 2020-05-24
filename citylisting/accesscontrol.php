<?php // accesscontrol.php
include_once 'common.php';
include_once 'db.php';

session_start();

$uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : "";
$name = $_SESSION['name']) ? $_SESSION['name'] : "";

?>