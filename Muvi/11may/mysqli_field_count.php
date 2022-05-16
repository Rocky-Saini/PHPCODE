//get the number of column
<?php

$con=@mysqli_connect('localhost','root','','muvi',3301);
mysqli_query($con,"SELECT * FROM rock");
// Get number of columns 
$c=mysqli_field_count($con);
echo $c; // 5


?>