<?php

require_once 'login.php';
require_once ('./dbc/dbc.inc');
$db_common = 'test1';
$dbn = mysqli_tz_connect($db_server, $db_user, $db_pass, $db_common, $db_port) or die ('Database Connection Error:'.mysqli_connect_error($dbn));

session_start();
if(!empty($_POST['name']) && !empty($_POST['ps']) && !empty($_POST['email'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['ps'];
	$tmp = login::addNewUser($name ,$email, $password);
	if($tmp){
		require 'index.php';
	}
	else{
		require 'addUser.php';
	}
}
elseif(!empty($_POST['name']) && !empty($_POST['ps'])) { //both un and ps are set
	$name = $_POST['name'];
	$password = $_POST['ps'];
	session_start();
	$tmp = login::findIfExistingUser($name, $password);
	if(!$tmp){
		require 'index.php';
	}
	else{
		require 'welcometoflexiple.php';
	}
}
elseif(!empty($_POST['email']) && !empty($_POST['ps'])){
	$email = $_POST['email'];
	$password = $_POST['ps'];
	$tmp = login::resetPass($email, $password);
	if($tmp){
		echo "<script>alert('Password Update Successful')</script>";
		require 'index.php';
	}
}
else{
	echo "<script>alert('Invalid Input')</script>";
	session_destroy();
		require 'index.php';
}
?>