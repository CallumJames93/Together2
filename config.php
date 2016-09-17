<?php

$conn = mysqli_connect('localhost', 'root', '', 'yoda');

if(!$conn){
    die('Connection failed:'.mysqli_connect_error());
}
 ?>
