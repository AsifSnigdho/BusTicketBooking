<?php	
	session_start();
	if(!isset($_SESSION['number'])){  
		header("location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Profiles</title>
</head>
<body>
<center>
<table border="1" cellspacing="0" height="200" width="100">
	
		
		<tr>
			<td>Name</td>
			<td>Phone number</td>
			
			
		</tr>
		<tr>
			<td>abc</td>
			<td>0111</td>
			
		</tr>
		<tr>
			<td>efg</td>
			<td>0171</td>
			
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="" value="delete">
			<a href="homepage.php">Back</a></td>
			
		</tr>
		



	
</table>
</center>
</body>
</html>