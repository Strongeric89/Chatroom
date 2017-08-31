<?php
  include 'db/database.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eric's Chat room</title>

    <link rel="stylesheet" href="css/stylesheet.css">

  </head>
  <body>
    <div id="container">



    <div id="chat_box">

      <?php
          $query1 = "SELECT * FROM chat ORDER BY id DESC; ";
          $run = $con->query($query1);

          while($row = $run->fetch_array()) :

       ?>

      <div id="chat_data">



        <span style="color:green"><?php echo $row['name']; ?>:</span>
        <span  style="color:red"><?php echo $row['msg']; ?></span>
        <span style="float:right"><?php echo $row['date']; ?></span>

      </div>
    <?php endwhile; ?>

    </div>

    <form action="index.html" method="post">

      <input type="text" placeholder="enter name here" name="name" required>
        <textarea type="text" placeholder="enter message here" name="message"  required></textarea>
          <input type="submit" name="submit" value="send it">

    </form>

    </div>

  </body>
</html>
