<?php
$con=@mysqli_connect('localhost','root','','muvi',3301);
if(!$con)
{
echo "Conn Faild".mysqli_connect_errno()." ".mysqli_connect_error();
}
mysqli_query($con,"Select * from rock");
echo "Aftected rows : " . mysqli_affected_rows($con);

mysqli_close($con);
?>