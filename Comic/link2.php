<?php
$ccc = glob($_POST["Comic"].'*');

$c = [];
foreach( $ccc as $ccc1 ){
	array_push($c, $ccc1);
}

print( json_encode($c) );
?>
