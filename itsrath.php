<?php
  $servername = "localhost";
  $username = "techjrog_its492";
  $password = "Buster@619";
  $dbname = "techjrog_rathskellar";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  else
      echo "Connected to MySQL"
  }
    


  ?>
  <!-- end PHP script -->