<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);
$sql= "Select * from rocky";
$result = mysqli_query($con,$sql);

$fieldinfo=mysqli_fetch_field_direct($result,1); // 2

printf("Name: %s\n",$fieldinfo->name);
printf("Table: %s\n",$fieldinfo->table);
printf("max. Len: %d\n",$fieldinfo->max_length);
// Free result set
mysqli_free_result($result);

?>