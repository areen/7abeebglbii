<?php

    $con = mysql_connect('localhost','root','root') or die(mysql_error());
    
    if (!$con) {
        echo "Unable to connect to DB: " . mysql_error();
        exit;
    }
 
    if (!mysql_select_db("YU_uni")) {
        echo "Unable to select mydbname: " . mysql_error();
        exit;
    }
    
  ?>
