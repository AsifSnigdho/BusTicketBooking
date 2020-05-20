<?php	
	session_start();
	if(!isset($_SESSION['number'])){  
		header("location: Login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>User info from database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;

}
form{color: red;}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Username</th>

<th>phone number</th>
<th>id</th>

</tr>
<?php
$key=0;
$conn = mysqli_connect("localhost", "root", "", "project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  username,phonenumber,id FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"]. "</td><td>" . $row["phonenumber"] . "</td><td>"
. $row["id"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<form >
	search<input type="text" id="term" name="term" onkeyup="abc()">
	
</form>
<br>
    <div id="result">
        
    </div>

    <script type="text/javascript">
        
        function abc(){
            var search = document.getElementById("term").value;
            var xhttp = new XMLHttpRequest();   
            
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200){
                    document.getElementById('result').innerHTML = this.responseText;
                }
            };
            
            xhttp.open("GET", "abc.php?key="+search, true);
            xhttp.send(); 
        }
    </script>
    <?php
    
    //require_once('db.php');

    $search = $_GET['key'];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'project');
    $sql = "select * from users where username like '%{$search}%'";
    $result = mysqli_query($con, $sql);
    $count =mysqli_num_rows($result);

    //echo $sql;

    if($count > 0){

        $data = "<table >
                <tr>
                    
                    <td>USERNAME</td>
                    <td>phone number</td>
                    <td>ID</td>
                    
                </tr>";

        while($row = mysqli_fetch_assoc($result)){
            $data .= "<tr>
            <td>{$row['username']}</td>
            <td>{$row['phonenumber']}</td>
             <td>{$row['id']}</td>
                    
                    
                    
            </tr>";
        }

        $data .= "</table>";
        echo $data;

    }else{
        echo "No result found!";
    }
?>
<script>
    document.querySelector("form").addEventListener("submit", function(event) {
                
        if (document.getElementById("phonenumber").value== "") { 
            alert("invalid phone number");
            event.preventDefault();
        }
         else if (document.getElementById("username").value== "") { 
            alert("username empty");
            event.preventDefault();
        }
        else if (document.getElementById("id").value== "") { 
            alert("set id");
            event.preventDefault();
        }
        else if (document.getElementById("password").value== "") { 
            alert("set id");
            event.preventDefault();
        }

    });
    </script> 

</body>
</html>