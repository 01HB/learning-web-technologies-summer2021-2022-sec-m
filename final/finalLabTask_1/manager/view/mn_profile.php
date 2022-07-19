<?php
	if(isset($_COOKIE['man'])) {
		$file = fopen('../model/manager.txt', 'r');
		
			while (!feof($file))
			{
				$data = fgets($file);
				$user = explode('|', $data);
					if($_COOKIE['email'] == trim($user[2]))
					{
						$name = trim($user[0]);
						$email = trim($user[2]);
						$contact = trim($user[3]);
						$dob = trim($user[4]);
						$gender = trim($user[5]);
						$address = trim($user[6]);
						$exp = trim($user[7]);
						$website = trim($user[8]);

						break;
					}
			}
?>
			<html>
			<head>
				<style type="text/css">
					td input{
						width: 500px;
						text-overflow: ellipsis;
						
					}
					*{
						text-decoration: none;
					}
					nav{
						background: dimgrey;
						height: 70px;
						width: 100%;
					}
					nav ul li{
						display: inline-block;
						margin: 0px 90px;
						line-height: 0px;
					}
					nav ul li a{
						color: white;
						padding: 9px 13px;
						border-radius: 10px;
					}
				</style>
				<title>Manager Profile</title>
			</head>
			<body>
				<label style="color: snow; font-size: 18px; line-height: 15px; padding: 0 20px; float: left;"><h3>Trip-Planner</h3></label>

					<nav>
						<ul style="float: right;">
							<li><h3><?php echo $_COOKIE['name']; ?></h3></li>
							<li><a href="mn_home.php"><b> Home </b></a></li>
							<li><a href="mn_profile.php"><b> Profile </b></a></li>
							<li><a href="../controller/logout_mn.php"><b> Logout </b></a></li>
						</ul>
					</nav>
				<center><h3><b><i>Manager</i></b></h3>
					<form method="post" action="../controller/update_mn_profile.php" enctype="">
					<fieldset style="width: 50%; margin-top: 10px;">
						<legend style="background-color: skyblue;"><i><b>Profile</b></i></legend>
							<table>
								
								<tr>
									<td>Name:</td>
									<td><input type="text" name="name" value="<?=$name?>"></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><?php echo $email;?></td>
								</tr>
								<tr>
									<td>Date of Birth:</td>
									<td><input type="text" name="dob" value="<?=$dob?>"></td>
								</tr>
								<tr>
									<td>Gender:</td>
									<td><input type="text" name="gender" value="<?=$gender?>"></td>
								</tr>

								<tr>
									<td>Contact:</td>
									<td><input type="number" name="contact" value="<?=$contact?>" ></td>
								</tr>
								<tr>
									<td>Address:</td>
									<td><input type="text" name="address" value="<?=$address?>"></td>
								</tr>
								<tr>
									<td>Experience:</td>
									<td><input type="text" name="exp" value="<?=$exp?>"></td>
								</tr>
								<tr>
									<td>Website:</td>
									<td><input type="url" name="website" value="<?=$website?>"></td>
								</tr>
							</table>
						<input type="submit" name="mn_update" value="update">
					</fieldset></center>
					</form>
				</body>
			</html>

<?php
		}
		/*elseif (isset($_COOKIE['cl'])) {
			header('location: cl_home.php');	
		}*/
		else{
			header('location: login.php');
		}
?>