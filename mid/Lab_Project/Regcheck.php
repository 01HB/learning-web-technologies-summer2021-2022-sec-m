<?php 
	session_start();

	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$conf_password = $_POST['conf_password'];
	$name = $_POST['name'];
	$usertype = $_POST['usertype'];

	if($userid == null || $password == null || $conf_password == null || $name == null || $usertype == null){
		echo "empty field(s)!<br/>All fields are required*";
	}else{



	}


?>