<?php
require 'config.php';
$con=mysqli_connect($server,$username,$password,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $sel = mysqli_query($con,"SELECT * FROM `todo` WHERE `status` = '0' OR `status` = '1' ");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("title"=>$row['title'],"duedate"=>$row['duedate'],"type"=>$row['type'],"status"=>$row['status']);
}
echo json_encode($data);
mysqli_close($con);
?>
