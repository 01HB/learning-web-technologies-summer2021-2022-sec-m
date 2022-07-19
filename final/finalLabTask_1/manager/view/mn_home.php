<?php
	//session_start();
		if(isset($_COOKIE['man'])) {
?>
			<html>
			<head>
				<style type="text/css">
					tr, td{
						width: 20px;
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
					div ul li{
						display: inline-block;
						margin: 10px 140px;
					}
					div ul li a{
						color: navajowhite;
						background: lightslategrey;
						padding: 9px 13px;
						border-radius: 10px;
					}
				</style>
				<title>Manager Home</title>
			</head>

			<body style="background-image: url('../asset/img/sunrise_bridge.jpg'); background-size: cover; background-repeat: no-repeat;">
				
					<label style="color: snow; font-size: 18px; line-height: 15px; padding: 0 20px; float: left;"><h3>Trip-Planner</h3></label>

					<nav>
						<ul style="float: right;">
							<li><h3>Welcome <?php echo $_COOKIE['name']; ?>!</h3></li>
							<li><a href="mn_profile.php"><b> Profile </b></a></li>
							<li><a href="../controller/logout_mn.php"><b> Logout </b></a></li>
						</ul>
					</nav>
				
					<div>
						<ul>
							<li><a href="mn_transport_book.php">Transports</a></li>
							<!--<li><a href="">Review Bookings</a></li>//-->
							<li><a href="manage_tg.php">Manage Travel Guides</a></li>
							<li><a href="msg_admin.php">Contact Admin</a></li>
						</ul>
					</div>
				
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