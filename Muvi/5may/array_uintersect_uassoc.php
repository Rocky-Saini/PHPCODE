
<?php
function myfunction_key($v1,$v2)
{
if ($v1===$v2)
 {
 return 0;
 }
return 1;
}
function myfunction_value($v1,$v2)
{
if ($v1===$v2)
 {
 return 0;
 }
return 1;
}
$a1=array("a"=>"Cat","b"=>"Dog","c"=>"Horse");
$a2=array("a"=>"Cat","b"=>"Dog","c"=>"Dog");
print_r(array_uintersect_uassoc($a1,$a2,"myfunction_key","myfunction_value"));

?>

