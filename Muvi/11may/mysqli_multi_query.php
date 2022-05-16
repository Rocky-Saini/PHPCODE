<?php
$con=@mysqli_connect("localhost","root","","muvi",3301);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   $sql = "SELECT empname FROM employee ORDER BY empname;";
   $sql .= "SELECT place_of_birth FROM myplayers";
   if (mysqli_multi_query($con,$sql)){
    do {
    // Store first result set
    if ($result=mysqli_store_result($con)) {
    while ($row=mysqli_fetch_row($result)){
    printf("%s\n",$row[0]);
    echo "<br />";
}
@mysqli_free_result($con);
    }
}
while (mysqli_next_result($con));
}
mysqli_close($con);
?>
