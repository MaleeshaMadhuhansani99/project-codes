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
		
		$type = $_REQUEST['type'];
		$description = $_REQUEST['description'];
		$estTime = $_REQUEST['estTime'];
        $date= date("Y/m/d");
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s');
        $driverid= $_REQUEST['driver_id'];
        $conductorid= $_REQUEST['conductor_id'];


		$sql = "INSERT INTO breakdown(Type,Description,Time,date,estTime,driver_id,conductor_id) VALUES ('$type','$description','$time','$date','$estTime','$driverid','$conductorid')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Inserted breakdown successfully.</h3>." . "<a href='viewBreakdown.php'>ViewBreakdown </a>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
