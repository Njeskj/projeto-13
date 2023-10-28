<?php


$db = mysqli_connect('localhost','root','','simplelogin');

if (mysqli_connect_errno()) {
	echo 'Database connection failed with the following errors:'. mysqli_connect_error();
	die();
} 

session_start();

include $_SERVER['DOCUMENT_ROOT'].'/simplelogin/helpers/helper.php';
?>
