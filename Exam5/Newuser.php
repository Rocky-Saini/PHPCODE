<?php  
$con=@mysqli_connect('localhost','root','','tables',3301) or die('conn failed...');

@$a=$_POST['username'];  
@$b=$_POST['password'];  
@$c=$_POST['role'];  
if(@$_POST['submit'])  
{  
$s="insert into user_master(user_name,password,role_name) values('$a','$b','$c')";  
mysqli_query($con,$s); 
if(mysqli_query){
echo "User create successfully !";
}else{
    echo "something wrong !";
}
}  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
    <div class="container">
        Log In Page
    </div>


    <form method="post" class="from-control">

    Username: <input type="text" name="username" />
    <br/>
    <br/>
    Password : <input type="text" name="password" />
    <br />
    <br />
    Role :<input type="radio" name="role" value="user"/>user
           <input type="radio" name="role" value="admin"/>admin
     <br />
     <br />
    <input type="submit" name="submit" value="Create User" id="btn" /> 
    </form>
</body>
</html>