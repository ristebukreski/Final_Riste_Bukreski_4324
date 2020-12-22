<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="registration.php" method="post" >
<table border="0" >
<tr>
<td>Name:
</td>
</tr>
<tr>
<td>
<input type="text" name="fname"><br>
</td>
</tr>
<tr>
<td>Username:
</td>
</tr>
<tr>
<td>
<input type="text" name="username"><br>
</td>
</tr>
<tr>
<td>Password
</td>
</tr>
<tr>
<td>
<input type="text" name="password"><br>
</td>
</tr>
<tr>
<td>City
</td>
</tr>
<tr>
<td>
<input type="text" name="city"><br>
</td>
</tr>
<tr>
<td>T User
</td>
</tr>
<tr>
<td>
<input type="radio" name="tuser" value="free" checked> free&nbsp;
  <input type="radio" name="tuser" value="basic"> basic
  <input type="radio" name="tuse" value="premium"> premium
</td>
</tr>
<tr>
<td>End user Agreement 
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="agreement" value="true" checked> Resident&nbsp;
  
</td>
</tr>
</table>
  <input type="submit" value="Submit">
</form>
<br> 


<?php
if (isset($_POST['agreement'])){ 

$hostname='localhost';
$username='root';
$password='example';
$database='test';

$fname;
$username;
$password;
$city;
$tuser;

	if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['username'])){		
		$username = $_POST['username'];		
	}
	if (isset($_POST['password'])){		
		$password = $_POST['password'];		
	}
	if (isset($_POST['city'])){		
		$city = $_POST['city'];		
	}	
	if (isset($_POST['tuser'])){		
		$tuser = $_POST['tuser'];		
	}	

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$fname."','".$username."','".$password."','".$city."','".$tuser."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>