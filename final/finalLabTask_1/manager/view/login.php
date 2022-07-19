<?php
	
	if(isset($_COOKIE['man'])) {
		header('location: mn_home.php');
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
?>
		<html>
		<head>
			<title>Trip-Planner Manager-Login</title>
		</head>

		<body>
			<center><h2 style="margin-top: 40px; background-color: aqua;"><i>Trip-Planner</i></h2>
			<form method="post" action="../controller/logincheck.php" enctype="" style="margin-top: 60px;">
				<fieldset style="width: 15%;">
					<legend><b><i>Login</i></b></legend>
						<table>
								
								<input type="hidden" name="usertype" value="manager">
							<tr>
								<td>Username</td>
							</tr>
							<tr>
								<td><input type="text" name="username" value=""></td>
							</tr>
							<tr>
								<td><br>Password</td>
							</tr>
							<tr>
								<td><input type="password" name="password" value=""></td>
							</tr>
						</table>
						<hr/>
						<br/><input type="submit" name="mn_login" value="Login" style="width: 86%;">
						<br/><br/>don't have an account? <a href="mn_signup.php">sign up</a>
				</fieldset>
			</form></center>
		</body>
		</html>
<?php
		}
?>