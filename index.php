<?php
  include "db-popo.php";
  include "db-connection.php";
  include "db-query.php";
  $res = $conn -> query($query_getAllBevande);

  var_dump($res);
 ?>
