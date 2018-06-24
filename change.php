<?php
require 'config.php';
$con=mysqli_connect($server,$username,$password,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $title=$_POST['title'];
  $duedate=$_POST['duedate'];
  $type=$_POST['type'];
  $status=$_POST['status'];
  mysqli_query($con,"UPDATE `todo` SET `status` = $status WHERE `todo`.`title` = '$title' and todo.type='$type' and todo.duedate='$duedate'and (`status` = 0 OR `status` = 1)");
 echo "success";
 mysqli_close($con);
?>
