<?php
$con=mysqli_connect("localhost","root","","muvi",3301);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   // Get thread id
   $t_id=mysqli_thread_id($con);
   // Kill connection
   mysqli_kill($con,$t_id);
   ?>


