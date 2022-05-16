<?php
function selection_sort(&$arr, $n) 
{
    for($i = 0; $i < $n ; $i++)
    {
        $min_idx = $i;
        for($j = $i + 1; $j < $n ; $j++)
        {
            if ($arr[$j] < $arr[$min_idx])
            {
                $min_idx = $j;
            }
        }
        // swap the minimum value to $ith node
        if ($arr[$i] > $arr[$min_idx])
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min_idx];
            $arr[$min_idx] = $tmp;
        }
    }
}
$arr = array(64, 25, 12, 22, 11);
$len = count($arr);
selection_sort($arr, $len);
echo "Sorted array : \n"; 
for ($i = 0; $i < $len; $i++) 
    echo $arr[$i] . " "; 

?> 