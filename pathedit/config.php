<?php
  session_start();
  
  $db = new mysqli("localhost","team15","team15","team15");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>