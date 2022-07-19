<?php 
    require_once "db.php";

    function login($username, $password){
        $conn = getConnection();
		$sql = "select * from managers where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }


    function signup($name, $pass, $email, $contact, $dob, $gender, $address, $exp, $website){
        $conn = getConnection();
		$sql = "insert into managers values('{$name}', '{$pass}', '{$email}', '{$contact}', '{$dob}', '{$gender}', '{$address}', '{$exp}', '{$website}')";
        
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>