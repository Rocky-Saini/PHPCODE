<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);
$sql= "Select * from rock";
$result = mysqli_query($con,$sql);

//fetch all rows
$arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($arr);

//free result 

mysqli_free_result($result);
mysqli_close($con);

?>