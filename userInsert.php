<!DOCTYPE html>
<html>

<head>
	<title>Insert Conductor</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "conductor_db");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$pwd = $_REQUEST['password2'];
        $date= date("Y/m/d");


		$sql = "INSERT INTO conductor_account(email,username,password,date) VALUES ('$email','$username','$pwd','$date')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Registered successfully.</h3>." . "<a href='index.php'>Login </a>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
