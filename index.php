<?php




  include "db-popo.php";
  include "db-query.php";
  include "db-connection.php";

  $res = $conn -> query($query_getAllBevande);

  $bevande = [];

  if ($res && $res -> num_rows > 0) {
    while ($row = $res -> fetch_assoc()) {
      $bevande = new DBTable($row);
      echo $bevande;
    }
  }


 ?>
