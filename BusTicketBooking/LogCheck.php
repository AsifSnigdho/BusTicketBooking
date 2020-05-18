<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$phonenum = $_REQUEST['number'];
		$password = $_REQUEST['password'];
		$usertype = $_REQUEST['utype'];
		
		if(empty(trim($phonenum)) || empty(trim($password)) || empty($usertype)){
			echo "Null submission found!";
		}else{

			$file = fopen('seller.txt', 'r');
			$seller = fread($file, filesize('seller.txt'));
			$data = explode('|', $seller);

			if( trim($data[0]) == $phonenum && trim($data[1]) == $password){
				$_SESSION['number'] = $phonenum;
				$_SESSION['pass'] = $password;

				header("location: homePage.php");
			}else{
				echo "invalid Phone Number/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>