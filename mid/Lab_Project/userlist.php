<?php
		if(isset($_COOKIE['stat'])){
			if($_COOKIE['usertype'] == 'admin'){
?>
<html>
<head>
	<title>User Info</title>
</head>
<body>
		<form>
			<fieldset>
				<legend>User List</legend>
				<table border="3" align="left">
					<tr>
						<th>username</th>
						<th>password</th>
						<th>email</th>
					</tr>
					<?php
						$file = fopen('user.txt', 'r');
						while (!feof($file)) {
								$data=fgets($file);
								$user = explode('|', $data);
								$username = trim($user[0]);
								$password = trim($user[1]);
								$email = trim($user[2]);
								echo "<tr>";
								echo "<td>".$username."</td>";
								echo "<td>".$password."</td>";
								echo "<td>".$email."</td>";
								echo "</tr>";

							}
					?>

				</table>
			</fieldset>
		</form>
		<br/>
		<a href="home.php">Home</a>

</body>
</html>

<?php
		}
			}else{
				echo "invalid request";
			}

?>