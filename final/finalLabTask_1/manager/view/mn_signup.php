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
			<title>Trip-Planner Manager Sign Up</title>
		</head>
		<body >
			<center><h2 style="margin-top: 40px; background-color: aqua;"><i>Trip-Planner</i></h2>
				<form method="post" action="../controller/mn_signupcheck.php" enctype="">
				<fieldset style="width: 350px; margin-top: 10px;">
					<legend><h3><b> sign up </b></h3></legend>
					<table>
						<tr>
							<td><b>name</b></td>
						    <td><input type="text" name="name" value=""></td>
					    </tr>

					    <tr>
						    <td><b>email</b></td>
						    <td><input type="email" name="email" value=""></td>
					    </tr>

					    <tr>
						    <td><b>date of birth</b></td>
						    <td><input type="date" name="dob" value=""></td>
					    </tr>

					    <tr>
						    <td><b>gender</b></td>
						    <td>
						    	<input type="radio" name="gender" value="Male">Male
							    <input type="radio" name="gender" value="Female">Female
							    <input type="radio" name="gender" value="Others">Others
						    </td>
					    </tr>

					    <tr>
						    <td><b>address</b></td>
						    <td><input type="text" name="address" value=""></td>
					    </tr>


					    <tr>
						    <td><b>password</b></td>
						    <td><input type="password" name="password" value=""></td>
					    </tr>

					    <tr>
						    <td><b>confirm password</b></td>
						    <td><input type="password" name="conf_pass" value=""></td>
						</tr>
						<tr>
							<td><b>contact</b></td>
						    <td><input type="number" name="contact" value=""></td>
					    </tr>
					    <tr>
							<td><b>experience</b></td>
						    <td><textarea name="exp" value=""></textarea></td>
					    </tr>
					    <tr>
							<td><b>website</b></td>
						    <td><input type="url" name="website" value=""></td>
					    </tr>
						
				    </table>
				    <hr/>
				    <input type="submit" name="mn_signup" value="Sign up" style="width: 30%;">
				    <br/><br/>already have one? <a href="login.php">login</a>
				</fieldset>
			</form>
			</center>
		</body>
		</html>
<?php
		}
?>