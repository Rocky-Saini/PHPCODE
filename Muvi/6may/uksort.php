<!-- sort an by array key -->
<?php
function my_sort($a, $b){
    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
    }
   $people = array("Swanson" => "Joe",
   "Griffin" => "Peter", "Quagmire" => "Glenn",
   "swanson" => "joe", "griffin" => "peter",
   "quagmire" => "glenn");
   uksort($people, "my_sort");
   print_r ($people);
   ?>

?>