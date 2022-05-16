<?php
require('dbconnect.php');
if(isset($_POST['name'],$_POST['rollno'],$_POST['password'],$_POST['address'],$_POST['role']))
{
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$role=$_POST['role'];
	//check for duplicate entry
	$query1="SELECT * FROM register WHERE rollno='$rollno'";
    $sql="INSERT INTO register (name, rollno, password, address, role)
    VALUES ('$name', '$rollno', '$password', '$address', $role)";
    mysqli_query($con,$sql);
	if(mysqli_affected_rows($con)>0) {
        echo "save success !";
   } else{
   echo "some error!";
   }
}
?>