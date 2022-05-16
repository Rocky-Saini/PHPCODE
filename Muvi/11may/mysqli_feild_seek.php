<?php
$con=mysqli_connect("localhost","root","","muvi",3301);
// Check connection
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$sql="SELECT job,empname FROM employee ORDER BY empid";
if ($result=mysqli_query($con,$sql)) {
 // Get field info for 1st column ("Lastname")
 mysqli_field_seek($result,0);
 $fieldinfo=mysqli_fetch_field($result);
 printf("Name: %s\n",$fieldinfo->name);
 printf("Table: %s\n",$fieldinfo->table);
 printf("max. Len: %d\n",$fieldinfo->max_length);
 // Free result set
 mysqli_free_result($result);
}
mysqli_close($con)

?>