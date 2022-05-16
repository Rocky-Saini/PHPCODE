<?php
$str= mb_strcut('I_ROHA', 1, 2) ; //Treated as byte stream.
$abc= mb_substr('I_ROHA', 1, 2) ; //Treated as character stream.
echo $str;
echo $abc;
?>