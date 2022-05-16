<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);
$sql= "Select * from rock";
$result = mysqli_query($con,$sql);
mysqli_fetch_row($result);
// Display field lengths
foreach (mysqli_fetch_lengths($result) as $i=>$val)
{
 printf("Field %2d has length: %2d <br />",$i+1,$val);
}
 // Free result set
mysqli_free_result($result);
mysqli_close($con);



?>
