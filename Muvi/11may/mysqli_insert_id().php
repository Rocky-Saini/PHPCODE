<?php
$con=mysqli_connect("localhost","root","","muvi",3301);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

mysqli_query($con,"INSERT INTO employee (empid,empname,salary,job,deptno) values (5,'sahab',5000,'ASE',30)"); 
 

   echo "New record has id: " . mysqli_insert_id($con); 
   mysqli_close($con);

   ?>