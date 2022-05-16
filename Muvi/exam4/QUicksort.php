<?php
function simple_quick_sort($arr)
{
    if(count($arr) <= 1){
        return $arr;
    }
    else{
        $pivot = $arr[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($arr); $i++)
        {
            if($arr[$i] < $pivot){
                $left[] = $arr[$i];
            }
            else{
                $right[] = $arr[$i];
            }
        }
        return array_merge(simple_quick_sort($left), array($pivot), simple_quick_sort($right));
    }
}
$unsorted = array(5,3,8,6,2,7);
echo implode(",",$unsorted)." @unsorted<br>";
$sorted = simple_quick_sort($unsorted);
echo implode(",",$sorted)." @sorted<br>";

?>