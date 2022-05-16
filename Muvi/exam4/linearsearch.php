<?php 
function linearsearchmyfun($my_array, $x) 
{ 
	$n = sizeof($my_array); 
	for($i = 0; $i < $n; $i++) 
	{ 
		if($my_array[$i] == $x) 
			return $i; 
	} 
	return -1; 
} 
 
$my_array = array(2, 3, 4, 10, 40); 
$x = 10; 
	
$response = linearsearchmyfun($my_array, $x); 
if($response == -1) 
	echo "Data Element is not present in array"; 
else
	echo "Data Element is present at index " , $response; 

?> 
