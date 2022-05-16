   
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form style="max-width:500px;margin:auto" method="get" action="forminsert.php">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Name" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="RollNo" name="rollno">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <div class="input-container">
  <i class="fa fa-home icon"></i>
    
    <input class="input-field" type="text" placeholder="Address" name="address">
  </div>
  
  <div class="input-container">
       <i class="fa fa-phone icon"></i>
  			<select class="input-field" id="role" name="role">
				<option value="Select a state">Select a role</option>
				<option value="Student">Student</option>
				<option value="Teacher">Teacher</option>
				<option value="Faculty">Faculity</option>
			</select>
    
  </div>
  

  <input type="submit" class="input-field" value="Register" align="middle">

</form>

</body>
</html>

