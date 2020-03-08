<?php	
	session_start();
	if(!isset($_SESSION['number'])){  
		header("location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1></h1>
	<form>
	<fieldset>
		<legend>Registration</legend>
	<table>
		<tr>
			<td>Mobile Numer <br/><input type="text" name="" value="" size="20" /></td>
			
		</tr>
		<tr>
			<td>Password <br/> <input type="password" name="" value=""/></td>
			
		</tr>
		
		<tr>
			<td>Name <br/><input type="text" name="" value="" size="20" /></td>
			
		</tr>
		
		
		<tr>
			
			<td>
				
				<input type="submit" name="" value="add"> 
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>