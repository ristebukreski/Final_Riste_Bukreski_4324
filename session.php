<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>

<?php
session_start();
	if (isset($_GET['session'])){
		$oper = $_GET['session']; 
			if (isset($_POST["sId"]) && !empty($_POST["sId"])) {
				
				$_SESSION["ID"] = "sID";

                echo "Session variables are set."

                echo "ID is " . $_SESSION["ID"] . ".<br>";

            }
		}
		
	
	
?>

	
</body>
</html>