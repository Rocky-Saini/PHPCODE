<!-- 1. mb_convert_encoding  -->
<!-- mbstring is a non-default extension . this means it is not -->

<?php
/* Convert internal character encoding to SJIS */
$str = "xyz";
$str = mb_convert_encoding($str ,"SJIS");

echo $str;
/* Convert EUC-JP to UTF-7 */
$str ="tiger";
$str =mb_convert_encoding($str,"UTF-7","EUC-JP");

echo $str;
/* Auto detect encoding from JIS, eucjp-win, sjis-win, then convert str to UCS-2LE 
*/
$str ="abcde";
$str =mb_convert_encoding($str,"UCS-2LE","JIS,eucjp-win,sjis-win");
echo $str;
/* "auto" is expanded to "ASCII,JIS,UTF-8,EUC-JP,SJIS" */
$str="1234";

$str ="1234";
$str = mb_convert_encoding($str,"EUC-JP","auto");

echo $str;

?>