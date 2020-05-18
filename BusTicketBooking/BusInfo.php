<?php	
	session_start();
	if(!isset($_SESSION['number'])){  
		header("location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bus Information</title>
</head>
<body>
<center>
<table border="1" cellspacing="0" height="200" width="100">
	
		
		<tr>
			<td>Bus No.</td>
			<td>Time</td>
			
		</tr>
		<tr>
			<td>01</td>
			<td>01.00</td>
			
		</tr>
		<tr>
			<td>02</td>
			<td>02.00</td>
			
		</tr>
		<tr>
			<td>03</td>
			<td>03.00</td>
			
		</tr>
		<tr>
			<td colspan="2"><a href="homepage.php">Back</a>
			<input type="submit" name="" value="changetime"><input type="submit" name="" value="changeterminal"><input type="submit" name="" value="AddStoppage"></td>
			
		</tr>
		



	
</table>
</center>
</body>
</html>