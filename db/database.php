<?php

  date_default_timezone_set('UTC');

  $host = "localhost";
  $db_name = "chat";
  $user = "root";
  $password = "G+66jFr)d&SX";
  //$password = "7512"; //for pi

 $con = new mysqli($host, $user,$password, $db_name);

 if($con){
     //echo "db connected!";
 }
 else{
    echo "db error!";
 }


  function formatDate($date){
    return date('g:i a', strtotime($date));

   }




 ?>
