<!-- Sets the internal pointer of an array to its first element -->
<?php
$people= array("Peter","Joe","Glenn","Cleveland");
echo current($people)."</br />";
echo next($people). "<br />";
echo reset($people);
?>