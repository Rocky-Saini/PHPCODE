<?php
    function mb_str_split( $string ) { 
    # Split at all position not after the start: ^ 
    # and not before the end: $ 
    return preg_split('/(?<!^)(?!$)/u', $string ); 
   } 
   $string = 'ABC'; 
   $charlist = mb_str_split( $string );
   print_r($charlist);


?>