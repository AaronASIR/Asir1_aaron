<?php


function calcula($a,$b)
{
	$r=null;
	$r=$r. ($a + $b);
	$r=$r. " es suma de $a + $b <br>";
	$r=$r. ($a - $b);
	$r=$r. " es resta de $a - $b <br>";
	$r=$r. ($a * $b);
	$r=$r. " es multiplicación de $a * $b <br>";
	$r=$r. ($a / $b);
	$r=$r. " es división de $a / $b <br>";
	$r=$r. "<br>";
	return $r;
}

$variable = calcula(9,1);
echo $variable;

?>