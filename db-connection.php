<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'bevanda';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connetct_error) {
    var_dump('error connecting db');
    var_dump($conn);
    die();
  }



 ?>
