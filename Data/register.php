<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','register',3301);

// get the post records
$name = @$_POST['name'];
$address=@$_POST['address'];
$email = @$_POST['email'];
$gender = @$_POST['gender'];
$role = @$_POST['role'];

// database insert SQL code
$sql = "INSERT INTO `user_master` ( `name`, `address`,`email`, `gender`, `role`) VALUES ('$name','$address', '$email', '$gender', '$role')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
 echo "Contact Records Inserted";
}

?>
<html>
<head>
	<title>Student Registration Form</title>
	<style type=""></style>
</head>
<body style="background-color: #00FFFF">
    <form method="POST" enctype="multipart/form-data" align="center"  >
		<h1><center>REGISTRATION FORM</center></h1>
			<center>
				<table border="1" style="background-color: #66FF33">
					<tr><td>Name</td><td><input type="text" name="name" required></td></tr>
			        <tr><td>Address</td><td><input type="text" name="address" required></td></tr>
			        <tr><td>email</td><td><input type="email" name="email" required></td></tr>
			        
			        
			        <tr><td>Gender</td><td><input type="radio" name="gender" value="male"> male 
				                      <input type="radio" name="gender" value="female">female</td></tr>

				    <tr><td>Role</td><td><select name="role" required>
				    				<option hidden>select</option>
			 		                <option value="teacher">Teacher</option>
  									<option value="student">Student</option>
  									<option value="manager">Manager</option>
  									<option value="director">director</option>
				                 </td></tr>
			 		                
			        
			        
                </table>
                    <input type="submit" value="submit" name="submit">
                    <input type="reset" value="refresh">
            </center>
		</form>
	</body>		
</html>
