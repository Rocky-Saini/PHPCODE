<?php  
$con=@mysqli_connect('localhost','root','','tables',3301) or die('conn failed...');

@$a=$_POST['username'];  
@$b=$_POST['password'];  
@$c=$_POST['role'];  
if(@$_POST['submit'])  
{  
$s="insert into user_master(user_name,password,role_name) values('$a','$b','$c')";  
mysqli_query($con,$s); 
echo "Your Data Inserted";  
 
}  
?> 