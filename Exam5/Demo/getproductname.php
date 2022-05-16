<?php
$ProdName=$_REQUEST['ProdName'];
include_once 'config.php';
$sql = "select * from product_master where ProdName='$ProdName'";
$resource=mysqli_query($con,$sql); 
$arr=mysqli_fetch_assoc($resource); 
echo json_encode($arr); 
?>