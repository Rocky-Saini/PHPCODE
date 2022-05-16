<!-- addcslashes - return a string with backslashs in front of the specified charcater  -->
<!-- <?php
   $str = "Hello, my name is Kai Jim.";
   echo $str."<br />";
   echo addcslashes($str,'m')."<br >";
   echo addcslashes($str,'K')."<br >";


?> -->

<!-- addslashes - returns a string with backslashs in front of predefined charactrs -->

<!-- <?php
   $str = "Who's kai Jim?";
   echo $str. "this is not safe in a database query . </br>";
   echo addslashes($str). "this is afe in a database query.";
?> -->

<!-- bin2hex  -->

<!-- <?php

 $str ="a";
 echo bin2hex($str)."<br />";
 echo pack("H*",'61')."<br />";

?> -->
<!-- chop    -->
<!-- <?php
   
  $str ="Hello World!\n\n";
  echo $str;
  echo chop($str);

?> -->


<!-- chr returns a charcter from a specified ASCII value    -->

<!-- <?php
echo chr(52)."<br />";
echo chr(052)."<br />";
echo chr(0x52)."<br />";
?> -->

<!-- chunk_split() Splits a string from one Cycrilic Charter set to another -->
<!-- Example -->

<!-- <?php
   $str="Hello world!";
   echo chunk_split($str,1,".");
?> -->

<!-- convert_cyr_string() - converts a string from one Cycrilic charcter set to another  -->

<!-- <?php
$str = "Hello world! æøå";
echo $str."<br />";
echo convert_cyr_string($str,'w','a');
?> -->

<!-- convert_uudecode()- Decodes a uuencoded string -->
<!-- Example -->

<!-- <?php
$str = ",2&5L;&\@=V]R;&0A'";
echo convert_uudecode($str);

?> -->

<!-- convert_uuencode() Encodes a string using the uuencode  -->

<!-- <?php
$str = "Hello world!";
echo convert_uuencode($str);

?> -->
<!-- 
count_chars() returns how many times an ASCII charcater occurs
within a string and returns the information -->

<!-- <?php
    $str="aaaaabbbbcc";
    print_r(count_chars($str,1));
?> -->

<!-- crc32() Calculates a 32bit CRC froa String -->

<!-- <?php

$str = crc32("Hello world!");
echo 'Without %u:'.$str."<br />";
echo 'With %u:';
printf("%u",$str)

?> -->

<!-- crypt() One way string encrption (hashing) -->

<!-- <?php
  if(CRYPT_STD_DES==1){
      echo "Standard DES : " .crypt("hello wolrd")."\n<br />";

  }
  else{
      echo "Standrad DES not Supported. \n <br />";
  }
  if(CRYPT_EXT_DES==1){
      echo "Extenderd DES : " .crypt("hello wolrd")."\n<br />";

  }
  else{
      echo "Extendred DES not Supported. \n <br />";
  }
  if(CRYPT_MD5==1){
      echo "MD5 : " .crypt("hello wolrd")."\n<br />";

  }
  else{
      echo "MDS not Supported. \n <br />";
  }
  if(CRYPT_BLOWFISH==1){
      echo "Blowfish : " .crypt("hello wolrd");

  }
  else{
      echo "Blowfish not Supported.";
  }
  
?> -->


<!-- wordwrap() wraps a string to given number to charcters -->

<!-- <?php
  $str = "An Example on a long word is:Supercaifragulistic";
  echo wordwrap($str,15 ,"<br /> \n");

?> -->


<!-- vsprintf() Writes a formtted string to a variable -->

<!-- <?php 
$str = "Hello";
$number = 123;
$txt =vsprintf("%s world. Day number %u",array($str,$number));
echo $txt;
?> -->

<!-- vprintf()   -->

<!-- <?php
  $str="Hello";
  $number = 123;
  vprintf("%s world. Day Number %u",array($str,$number));


?> -->
<!-- vfprintf -->
<!-- <?php
  $str="Hello";
  $number = 123;
  $file =fopen("test.txt","w");
  vfprintf($file,"%s world. Day Number %u",array($str,$number));


?> -->


<!-- ucwords convert first chracter of each words in uppercase  -->
<?php
 echo ucwords("hello world");
?>










