<?php
include 'config.php';
?>
<html>  
<body bgcolor="pink">  
<center>  
<form method="post">  
<table border="1" bgcolor="#00CCFF">  
<tr><td>Userame</td>  
<td><input type="text" name="username"/></td>  
</tr>  
<tr><td>Password</td>  
<td><input type="text" name="password"/></td>  
</tr>  
<tr><td rowspan="2">role</td>  
<td><input type="radio" name="role" value="user"/>user</td>  
<tr>  
<td><input type="radio" name="role" value="admin"/>admin</td></tr>  
</tr>  
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>  
</table>  
</form>  
</center>  
</body>  
</html> 