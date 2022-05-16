<?php
$con=mysqli_connect("localhost","root","","muvi",3301);
$charset=mysqli_character_set_name($con);
echo "Default character set is: " . $charset;
mysqli_close($con);
?>