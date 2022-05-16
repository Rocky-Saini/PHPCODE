<?php

$f=fopen('test.txt','r');
echo $f; // Resouce id #3
$c=fread($f,100);
echo $c;

?>