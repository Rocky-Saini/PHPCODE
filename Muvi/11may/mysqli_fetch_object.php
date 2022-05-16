<?php
$con=mysqli_connect('localhost','root','','muvi',3301);
$sql= "Select * from rock";
$result = mysqli_query($con,$sql);
$obj=mysqli_fetch_object($result);
printf("%s (%s)\n",$obj->empid,$obj->empname);
mysqli_free_result($result);

mysqli_close($con);

?>
