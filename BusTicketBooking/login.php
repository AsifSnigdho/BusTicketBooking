<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in form</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">

</head>
<body>
	<center>
	<h1>Please Login First!</h1>
	<form method="POST" action="logCheck.php">
	
		<div>
		<table>
		<tr>
			<td>Mobile Number <br/><input type="text" id="phonenumber" name="number" value="" size="20" /></td>
			
		</tr>
		<tr>
			<td>Password <br/> <input type="password" id="password" name="password" value=""/></td>
			
		</tr>
		<tr>
			<td>User type:
				<input type="radio" id="utype" name="utype" value="utype">admin 
				<input type="radio" id="utype" name="utype" value="utype">seller
				<input type="radio" id="utype" name="utype" value="utype">user
			</td>
		</tr>
		<tr>
			
			<td >
				
				<input type="submit" name="submit" value="Login" > 
				
			</td>
		</tr>
		</table>
		</div>
		
	</form>
	
		<script>
    document.querySelector("form").addEventListener("submit", function(event) {
                
        if (document.getElementById("phonenumber").value== "") { 
            alert("invalid phone number");
            event.preventDefault();
        }
         else if (document.getElementById("password").value== "") { 
            alert("password null");
            event.preventDefault();
        }
        else if (document.getElementById("utype").value== "") { 
            alert("usertype not selected");
            event.preventDefault();
        }

    });
    </script> 
    
		</body>
		</center>
		<?php
	session_destroy();
	?>
		