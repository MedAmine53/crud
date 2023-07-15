<?php
  $host = "localhost";
  $userName = "root";
  $password = "";
  $dbname = "crud" ; 

  //create Connection 
  $conn = mysqli_connect($host, $username, $password, $dbname);

  // check connection
  if(!$conn){
    die("Connection failed : " . mysqli_connect_error());
  }
  ?>