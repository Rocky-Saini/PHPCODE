<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);

$sql="SELECT * FROM rock";
$result=mysqli_query($con,$sql);
// Seek to row number 4
 mysqli_data_seek($result,3);
// Fetch row
 $row=mysqli_fetch_row($result);
 printf ("EMPID: %s EMPNAME: %s", $row[0], $row[1]);
 // Free result set
 mysqli_free_result($result);
mysqli_close($con);


?>