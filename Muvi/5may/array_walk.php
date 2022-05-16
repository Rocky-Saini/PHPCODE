<!-- Applies a user function to every memeber of an array   -->
<?php

function myfunction($value,$key)
{
    echo "The key $key ha the value $value<br />";
}
$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse");
array_walk($a,"myfunction");

?>