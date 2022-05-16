<?php
$con=mysqli_connect("localhost","root","","muvi",3301);
// Check connection
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$sql="SELECT empname,salary FROM employee ORDER BY empname";
if ($result=mysqli_query($con,$sql)) {
 // Get field info for all fields
 while ($fieldinfo=mysqli_fetch_field($result)) {
 // Get field cursor position
 $currentfield=mysqli_field_tell($result); 
 printf("Column %d:\n", $currentfield);

 printf("Name: %s\n", $fieldinfo->name);
 printf("Table: %s\n", $fieldinfo->table);
 }
 // Free result set
 mysqli_free_result($result);
 }
mysqli_close($con);


?>