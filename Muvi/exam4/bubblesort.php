<?php
function bubbleSort1(&$arr)
{
   $n = sizeof($arr);
for($i = 0; $i < $n; $i++)
{
  for ($j = 0; $j < $n - $i - 1; $j++)
     {
  if ($arr[$j] > $arr[$j+1])
   {
$t1 = $arr[$j];
$arr[$j] = $arr[$j+1];
$arr[$j+1] = $t1;
  }
 }
}
}
$arr = array(64, 32, 34, 26, 25, 43, 12, 68, 22, 90, 11);
$len = sizeof($arr);
bubbleSort1($arr);
echo "Sorted array : \n";
for ($i = 0; $i < $len; $i++)
echo $arr[$i]." ";
?>