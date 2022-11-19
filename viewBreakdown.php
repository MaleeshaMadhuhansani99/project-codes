<!DOCTYPE html>
<html>

<head>
	<title>Insert breakdown</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "conductor_db");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          
          $sql = "SELECT breakdown_id,Type,Description,Time,date,estTime,driver_id,conductor_id FROM breakdown";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "<br>id: " . $row["breakdown_id"];
              echo "<br>Type: " . $row["Type"];
              echo "<br>Description: " . $row["Description"];
              echo "<br>Time: " . $row["Time"];
              echo "<br>Date: " . $row["date"];
              echo "<br>Estimate Time: " . $row["estTime"];
              echo "<br>Driver id: " . $row["driver_id"];
              echo "<br>Conductor id: " . $row["conductor_id"]; 
            }
          } else {
            echo "0 results";
          }
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
