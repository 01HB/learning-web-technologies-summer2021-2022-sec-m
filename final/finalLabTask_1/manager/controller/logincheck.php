<?php
	//session_start();
	if(isset($_POST['mn_login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];

	require_once "../model/manager_model.php";
	require_once "../model/db.php";

	if($username == null || $password == null){
		echo "empty username or password!!";
	}else{

		if($usertype == 'manager'){

			$status = login($username, $password);

			if($status){
				$conn = getConnection();
				$sql = "select * from managers where username='{$username}' and password='{$password}'";
				$result = mysqli_query($conn, $sql);
				$rowdata = mysqli_fetch_assoc($result);

				setcookie('name', $username, time()+1801, '/');
				setcookie('email', $rowdata['email'], time()+1801, '/');
				setcookie('man', 'nothing', time()+1800, '/');
				header('location: ../view/mn_home.php');
			}
		}

		echo "invalid username or password<br/><br/>";
		echo "<a href=\"../view/login.php\">Try again</a>";

	}

	}
	else{
		echo "invalid request!!<br/><br/>";
		echo "<a href=\"../view/login.php\">back to login</a>";
	}

?>