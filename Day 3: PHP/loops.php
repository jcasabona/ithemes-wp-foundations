<?php
	$i = 10;

	while( $i < 10 ) { 
	  echo "$i \n";
	  $i++; //$i = $i + 1;
	}

	do { 
		echo $i;
	}while( $i < 10);

$colors = ['red', 'blue', 'green', 'yellow'];
for($i=0; $i<sizeof($colors); $i++) {
	echo $colors[$i] . ', ';
}

$colors = ['red', 'blue', 'green', 'yellow'];
foreach( $colors as $color ) {
	echo $color . ', ';
}

$yankees = array( 
	'pitcher' => 'Cole',
	'catcher' => 'Sanchez',
	'1B' => 'Bruce',
	'LF' => 'Fraizer',
);

foreach( $yankees as $pos => $player ) {
	echo "<p>Playing $pos is $player</p>";
}