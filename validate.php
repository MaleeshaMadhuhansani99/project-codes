<?php
 
include_once('sys/connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM conductor_account");
    $stmt->execute();
    $users = $stmt->fetchAll();
    $no=0;
     
    foreach ($users as $user) {    
        if(($user['username'] == $username) && ($user['password'] == $password)) {
                header("location: user.php");
                $no=1;
                die();
        }
        if($no==0){
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
        }
    }
}
 
?>