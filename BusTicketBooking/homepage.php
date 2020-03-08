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
</head>
<body>
<center>
<table>
		<h1>Welcome home!</h1>
		<tr>
			<td><a href="UserInfo.php">User Profile</a></td>
			
		</tr>
		<tr>
			<td><a href="registration.php">Add user</a></td>
			
		</tr>
		<tr>
			<td><a href="BusInfo.php">Bus Info</a></td>
			
		</tr>
		<tr>
			<td><a href="CheckBonus.php">Bonus</a></td>
			
		</tr>
		<tr>
			<td><a href="Payment.php">Payment</a></td>
			
		</tr>
		<tr>
			<td></td>
			
		</tr>
		<tr>
			<td><a href="login.php">Log out</a></td>
			
		</tr>
		



	
</table>
</center>
</body>
</html>
