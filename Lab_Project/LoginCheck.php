<?php 
	session_start();

	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];

	if($userid == null || $password == null){
		echo "null username/password";
	}else{

		if($usertype == 'admin'){
				setcookie('usertype', 'admin', time()+1800, '/');
				$file = fopen('admin.txt', 'r');
		
			while (!feof($file)) {
				$data = fgets($file);
				$user = explode('|', $data);
				if($userid == trim($user[0]) && $password == trim($user[1])){
					$_SESSION['stat'] = true;
					setcookie('stat', 'logged in', time()+1800, '/');
						header('location: Home.php');
					}
				}
		}else if($usertype == 'user'){
					setcookie('usertype', 'user', time()+1800, '/');
					$file = fopen('user.txt', 'r');

			while (!feof($file)) {
				$data = fgets($file);
				$user = explode('|', $data);
				if($userid == trim($user[0]) && $password == trim($user[1])){
					$_SESSION['stat'] = true;
					setcookie('stat', 'logged in', time()+1800, '/');
						header('location: Home.php');
					}
			}
		}

		echo "invalid username or password<br/>";
		echo "<a href=\"Signin.html\">Try Again</a>";

	}


?>