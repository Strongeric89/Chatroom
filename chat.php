<?php
  include 'db/database.php';

 ?>
<?php


    $query1 = "SELECT * FROM chat ORDER BY id DESC; ";
    $run = $con->query($query1);

    while($row = $run->fetch_array()) :

 ?>

<div id="chat_data">



  <span style="color:green"><?php echo $row['name']; ?>:</span>
  <span  style="color:red"><?php echo $row['msg']; ?></span>
  <span style="float:right"><?php echo formatDate($row['date1']); ?></span>

</div>
<?php endwhile; ?>
