<?php

  $host = "localhost";
  $db_name = "chat";
  $user = "root";
  $password = "";

 $con = new mysqli($host, $user,$password, $db_name);

 if($con){
     echo "db connected!";
 }
 else{
    echo "db error!";
 }


 ?>