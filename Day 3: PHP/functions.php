<?php
function is_bigger($a, $b) {
      	if( $a > $b ) {
          return  'A > B';
        } else if ( $b > $a ) {
           return 'B > A';
        }
          
        return 'A and B are equal.';
    }

     echo is_bigger(90, 90);

//@TODO
function is_pal( $str ) {
	$str = strtolower($str);
	$str = str_replace( ' ', '', $str);

	if( $str == strrev($str) ) {
		echo 'It is a pal!';
	} else {
		echo 'Not a pal!';
	}
}
  
  $string = 'Race Car';
  is_pal( $string );