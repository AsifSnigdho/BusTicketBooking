<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in form</title>
</head>
<body>
	<h1></h1>
	<form method="POST" action="logCheck.php">
	<fieldset>
		<legend>LOGIN</legend>
		<table>
		<tr>
			<td>Mobile Number <br/><input type="text" name="number" value="" size="20" /></td>
			
		</tr>
		<tr>
			<td>Password <br/> <input type="password" name="password" value=""/></td>
			
		</tr>
		<tr>
			<td>User type:
				<input type="radio" name="utype" value="utype">admin 
				<input type="radio" name="utype" value="utype">seller
				<input type="radio" name="utype" value="utype">user
			</td>
		</tr>
		<tr>
			
			<td>
				
				<input type="submit" name="submit" value="Login"> 
				
			</td>
		</tr>
		</table>
		</fieldset>
		</body>
		<?php
	session_destroy();
	?>
		