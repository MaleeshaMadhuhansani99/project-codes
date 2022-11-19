<?php include('sys/header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Breakdowns</title>
  </head>
  <body>
     <form action = "breakdownInsert.php" method="POST">
    <h1>Add breakdown</h1>
    <form class="" action="index.html" method="post">
        <ul>
          <label for="">Enter Type of the breakdown : </label>
          <input type="text" name="type" value="" required>
        </ul>
        <ul>
          <label for="">Enter Description(optional) :</label>
          <input type="text" name="description" value="" >
        </ul>
        <ul>
          <label for="">Enter estimate time to fix breakdown(minutes):</label>
          <input type="text" name="estTime" value="" required>
        </ul>
          <label for="">Enter driver id:</label>
          <input type="text" name="driver_id" value="" required>  
        </ul>
        </ul>
          <label for="">Enter conductor id:</label>
          <input type="text" name="conductor_id" value="" required>  
        </ul>
        
        <input type="submit" value="Submit">
        
    </form>
  </body>
</html>

<?php include('sys/footer.php'); ?>


