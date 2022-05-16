<?php
$con=mysqli_connect('localhost','root','','muvi',3301);
$sql= "Select * from rock";
$result = mysqli_query($con,$sql);
// Fetch one and one row
$row=mysqli_fetch_row($result);
printf ("%s (%s)",$row[0],$row[1]);
// Free result set
mysqli_free_result($result);

?>