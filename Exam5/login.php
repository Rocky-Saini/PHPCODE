<?php  
$con=@mysqli_connect('localhost','root','','tables',3301) or die('conn failed...');
@$username=$_POST['username'];  
@$password=$_POST['password'];  
@$role=$_POST['role'];  
if(@$isset['login']){
$query="SELECT * FROM user_master WHERE user_name='".$username."' and 
password='".$password."'  and role_name='".$role."'";
$result= mysqli_query($con,$query);
if($result){
    while($row=mysqli_fetch_array($result)){
        echo ('<script>alert("you are login successfully and you are loged in as ' .$row['role_name'].'") </script>');
    }
    if(mysqli_num_rows($result)>0){
        ?>
        <script>
        window.location.href="admin.php"
        </script>
        <?php
    }else{
        ?>
        <script>
        window.location.href="admin.php"
        </script>
        <?php
    } 
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
    <input type="submit" name="login" value="Login" id="btn" />  &nbsp;&nbsp;<a id="anc" href="Newuser.php">New user Sign-Up</a>  
    </form>
</body>
</html>