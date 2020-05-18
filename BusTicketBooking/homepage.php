<?php	
	session_start();
	if(!isset($_SESSION['number'])){  
		header("location: Login.php");
	}
?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="homepagestyle.css">
</head>
<body>

	

	<div class="menu-bar"
	<ul>
		<li><a href="UserInfo.php">User Profile</a></li>
		<li><a href="registration.php">Add user</a></li>
		<li><a href="BusInfo.php">Bus Info</a></li>
		<li><a href="CheckBonus.php">Bonus</a></li>
		<li><a href="Payment.php">Payment</a></li>
		<li><a href="login.php">Log out</a></li>
	</ul>
	

</div>
<center>
<h1>Welcome home!</h1>
</center>
</body>
</html>
