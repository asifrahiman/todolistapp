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
 mysqli_query($con,"INSERT INTO todo (title,duedate,type)VALUES ('$title','$duedate','$type')");
 echo "success";
 mysqli_close($con);
?>
