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
			<td>Month</td>
			<td>Bonus</td>
			
		</tr>
		<tr>
			<td>january</td>
			<td>1000</td>
			
		</tr>
		<tr>
			<td>February</td>
			<td>2000</td>
			
		</tr>
		<tr>
			<td>March</td>
			<td>300</td>
			
		</tr>
		<tr>
			<td>April</td>
			<td>700</td>
			
		</tr>
		<tr>
			<td>May</td>
			<td>-</td>
			
		</tr>
		<tr>
			<td>June</td>
			<td>-</td>
			
		</tr>
		<tr>
			<td>July</td>
			<td>-</td>
			
		</tr>
		<tr>
			<td>August</td>
			<td></td>
			
		</tr>
		<tr>
			<td>September</td>
			<td></td>
			
		</tr>
		<tr>
			<td>October</td>
			<td></td>
			
		</tr>
		<tr>
			<td>November</td>
			<td></td>
			
		</tr>
		<tr>
			<td>December</td>
			<td></td>
			
		</tr>
		<tr>
			<td colspan="2"><center><a href="homepage.php">Back</a></center></td>
			
			
		</tr>
		



	
</table>
</center>
</body>
</html>