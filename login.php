<?php
session_start();
require_once 'config.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user_info WHERE uid ='$uid' AND pwd ='$pwd'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
      echo "Your username or password is incorrect!";
}
else {
    $_SESSION['id'] = $row['id'];
    $_SESSION['uid'] =$row['uid'];
}
header("Location: index.php");
 ?>
