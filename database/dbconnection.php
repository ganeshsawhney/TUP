<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="utp";
  mysql_connect($host,$user,$pass) or die("database connection failed");
  mysql_select_db($db) or die("No Database name");

?>
