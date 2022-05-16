1<?php
$text = 'multi_byte_string';
$pattern = '.*(?<name>string).*'; // "?P" causes "mbregex compile err" in PHP 
if(mb_ereg($pattern, $text, $matches)){
 echo '<pre>'.print_r($matches, true).'</pre>';
}else{
 echo 'no match';
}
?>