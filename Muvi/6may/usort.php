<!-- Sorts an array by values using a user-defined function -->
<?php
function my_sort($a, $b){
 if ($a == $b) return 0;
 return ($a > $b) ? -1 : 1;
 }
$arr = array("Peter", "glenn","Cleveland",
"peter","cleveland", "Glenn");
usort($arr, "my_sort");
print_r ($arr);
?>