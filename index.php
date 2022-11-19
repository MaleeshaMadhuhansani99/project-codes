<?php

require_once('sys/connection.php');
require_once('sys/header.php');

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
 
<body>
    <form action="validate.php" method="post">
        <h1>Login</h1>
        <ul>
            <label for="">Enter username</label>
            <input type="text" name="username" value="" required>
        </ul>

        <ul>
            <label for="">Enter password</label>
            <input type="text" name="password" value="" required>
        </ul>
            <input class="button" type="submit" name="login" value="Sign In"> 
        </ul>
    </form>
</body>
 
</html>