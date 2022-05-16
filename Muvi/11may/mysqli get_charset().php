<?php
$con=mysqli_connect("localhost","root","","muvi",3301);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   var_dump(mysqli_get_charset($con));
   mysqli_close($con);
   
?>