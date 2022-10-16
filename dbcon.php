<?php
  require 'console.php';

  $servername = "localhost";
  $username = "ptms";
  $password = "ptmspass";
  $db = "ptms";

  $conn = new mysqli($servername, $username, $password, $db);

  if (!$conn) {
    die("<script>console.log('$conn->connect_error');</script>");
    $debug->log("db not connected");
  }else{
    $debug->log("db connected");
  }
  session_start();

 
?>