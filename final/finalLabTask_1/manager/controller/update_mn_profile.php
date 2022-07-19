<?php
	if(isset($_COOKIE['man'])) {
	if(isset($_POST['mn_update'])) {

	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$exp = $_POST['exp'];
	$website = $_POST['website'];
	$cont = $_POST['contact'];


	if($name == null || $dob == null || $gender == null || $address == null || $exp == null || $website == null || $cont == null){
		echo "empty fields!!";
	}else{
			
			$i=0;
			$file1 = fopen('../model/manager.txt', 'r');
			
			while (!feof($file1))
			{
				$data = fgets($file1);
				$user = explode('|', $data);
					if($_COOKIE['email'] == trim($user[2])){
						$line[$i++] = $name."|".trim($user[1])."|".trim($user[2])."|".$cont."|".$dob."|".$gender."|".$address."|".$exp."|".$website."\r\n";

					}else{
						$line[$i++] = $data;
					}
			}
			//fclose($file1);

			$file2 = fopen('../model/manager.txt', 'w');
			for($j=0; $j<$i; $j++)
			{
				fwrite($file2, $line[$j]);
			}
			//fclose($file2);

			echo "updated successfully!<br/>";
			echo "<a href=\"../view/mn_profile.php\">back</a>";

		}

		}else{
			echo "invalid request!!<br/>";
		}
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
		header('location: ../view/login.php');
	}

?>