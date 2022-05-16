<?php
$con=mysqli_connect("localhost","root","","muvi",3301);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

print_r(mysqli_get_connection_stats($con));
mysqli_close($con);

?>