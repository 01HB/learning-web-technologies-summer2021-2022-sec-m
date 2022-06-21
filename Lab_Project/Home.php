<?php 
	session_start();
	if(isset($_COOKIE['stat'])){
 			if($_COOKIE['usertype']=='user'){ 
?>

<html>
<head>
	<title>User Home Page</title>
</head>
<body>
	<fieldset>
		<table>
			<tr>
				<td><h1>Welcome Anne!</h1><br><br></td>
			</tr>
			<tr>
				<td align="center">
					<a href="Profile.php"> Profile </a><br>
					<a href="Chngpass.php"> Change Password </a><br>
					<a href="logout.php"> Logout </a>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>


<?php
	}else if($_COOKIE['usertype']=='admin'){
?>

<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>
	<fieldset>
		<table>
			<tr>
				<td><h1>Welcome Bob!</h1><br><br></td>
			</tr>
			<tr>
				<td align="center">
					<a href="Profile.php"> Profile </a><br>
					<a href="Chngpass.php"> Change Password </a><br>
					<a href="userlist.php"> View Users </a><br>
					<a href="logout.php"> Logout </a>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>

<?php
		}
	}else{
		echo "invalid request";
	}  
?>
