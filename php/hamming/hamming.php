<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//
function distance($a, $b)
{
	$size = strlen($a);
	if($size!=strlen($b)) throw new InvalidArgumentException("DNA strands must be of equal length.", 1);
	$counter=0;
	for($i=0; $i<$size; $i++){
		if($a[$i] != $b[$i]){
			$counter++;
		}
	}
	return $counter;
}
