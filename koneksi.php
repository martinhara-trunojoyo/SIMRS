<?php 
  $host='localhost';
  $user='root';
  $pass='';
  $db="database_rumahsakit4";
  $conn=mysqli_connect($host,$user,$pass,$db);
  if($conn){
    // echo'nyambung cuy';
  }
  mysqli_select_db($conn,$db)
?>