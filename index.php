<?php
  include 'db/database.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eric's Chat room</title>

    <link rel="stylesheet" href="css/stylesheet.css">

    <script type="text/javascript">

      function ajax(){
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
          if(request.readyState == 4 && request.status == 200){
            document.getElementById('chat').innerHTML = request.responseText;
          }
        }
        request.open('GET', 'chat.php', true);
        request.send();

      }

      setInterval(function(){ajax()}, 1000);

    </script>

  </head>
  <body onload="ajax()">
    <div id="container">
      <h1>Eric Strong's Chat Room</h1>



    <div id="chat_box" style="overflow:auto;">
        <div id="chat"></div>
    </div>

    <form action="index.php" method="post">

      <input type="text" placeholder="enter name here" name="name" required>
        <textarea type="text" placeholder="enter message here" name="message"  required></textarea>
          <input type="submit" name="submit" value="click to send">

    </form>
    <?php

        if (isset($_POST['submit'])){

          $name = $_POST['name'];
          $msg = $_POST['message'];

        $query2 = "INSERT INTO chat (name,msg) VALUES ('$name', '$msg')";

        $run = $con->query($query2);

        if($run){
          //echo "<embed loop='false' scr='click.wav' hidden='true' autoplay='true'></embed>";
          echo "<audio hidden='true' autoplay ><source src='click.wav'></audio>";
        }
      }
     ?>

    </div>

  </body>
</html>
