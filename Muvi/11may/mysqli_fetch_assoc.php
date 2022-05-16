<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);
$sql= "Select * from rock";
$result = mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
printf ("Empid: %s , empname: %s",$row["empid"],$row["empname"]);
// Free result set
mysqli_free_result($result);
mysqli_close($con);


?>