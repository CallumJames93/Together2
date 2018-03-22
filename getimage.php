<?php
require_once 'config.php';
  $sql = "SELECT logo FROM user_info";
  $result = $conn->query($sql);

  $rows = $result -> fetch_assoc();
  
  $image = $rows['logo'];
  header("Content-type: image/jpeg");
  print $image;
  exit;
	
 ?>
