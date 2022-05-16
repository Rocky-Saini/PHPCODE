<!-- Apllies a user function recursively to every member of an array   -->
<?php

function myfunction($value,$key)
{
    echo "The key $key ha the value $value<br />";
}
$a1=array("a"=>"Cat","b"=>"Dog");
$a2=array($a1,"1"=>"Bird","2"=>"Horse");

array_walk_recursive($a2,"myfunction");

?>