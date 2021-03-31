<?php
$a = 8;

if ( $a >= 5 ) { 
	echo '$a >= 5.';
  } else if ( $a == 5 ) { 
	echo '$a == 5';
  } else {
	echo '$a must be 5.';
  }
  

switch($a) { 
  case 1: 
    echo 'a == 1';
    break;
  case 5: 
    echo 'a == 5';
    break;
  case 10: 
    echo 'a == 10';
    break;
  default: 
    echo 'I don\'t really know what a is.';
}

echo "\n";

$result = match($a) {
    1,2,3,4 => '$a is 4 or less',
    5 => '$a is 5',
  	6,7,8 => '$a is at most 8.',
    default => '$a could be negative, 0, or more than 8',
};

echo $result;