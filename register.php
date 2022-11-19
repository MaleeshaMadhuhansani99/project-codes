<?php include('sys/header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conductor login</title>
  </head>
  <body>
     <form action = "userInsert.php" method="POST">
    <h1>Register</h1>
    <form class="" action="index.html" method="post">
        <ul>
          <label for="">Enter email</label>
          <input type="email" name="email" value="" required>
        </ul>
        <ul>
          <label for="">Enter username</label>
          <input type="text" name="username" value="" required>
        </ul>
        <ul>
          <label for="">Enter password</label>
          <input type="text" name="password1" value="" required>
        </ul>
          <label for="">Confirm password</label>
          <input type="text" name="password2" value="" required>  
        </ul>
      
        <input type="submit" value="Submit">
    </form>
  </body>
</html>

<?php include('sys/footer.php'); ?>

