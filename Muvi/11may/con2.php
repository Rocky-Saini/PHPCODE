<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);
 mysqli_autocommit($con,FALSE);

mysqli_query($con,"INSERT INTO rock(empid,empname,deptno) values(107,'saini',10)");
mysqli_commit($con);
mysqli_close($con);
?>