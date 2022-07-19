<?php 

	if($_COOKIE['usertype']=='user'){ 
				
		session_start();
		session_destroy();
		setcookie('stat', 'logged in', time()-1000, '/');
		setcookie('usertype', 'user', time()-1000, '/');
		header('location: Signin.html');
	}
	elseif ($_COOKIE['usertype']=='admin') {
		session_start();
		session_destroy();
		setcookie('stat', 'logged in', time()-1000, '/');
		setcookie('usertype', 'admin', time()-1000, '/');
		header('location: Signin.html');
	}

?>