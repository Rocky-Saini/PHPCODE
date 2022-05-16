<?php
function myfunction($v1,$v2)
{
if ($v1===$v2)
 {
 return 0;
 }
 if($v1>$v2)
return 1;
{
    return -1;
}
return 1;
}

$a1=array("a"=>"Cat","b"=>"Dog","c"=>"Horse");
$a2=array("a"=>"Cat","b"=>"Dog","c"=>"Fish");
print_r(array_uintersect($a1,$a2,"myfunction"));

?>