<?php

function isValid(String $digits){
	
	$cleanedDigits = str_replace(' ', '', $digits);
	
	if(!is_numeric($cleanedDigits))
		return false;

	if(strlen($cleanedDigits) < 2)
		return false;

	$arrayDigits = array_reverse(str_split($cleanedDigits));

	$mappedArray = array_map(function($key, $digit){

		$doubled = $digit*2;

		if($key % 2 !== 0 )
			return ($doubled>9)? $doubled - 9 : $doubled;
		
		return $digit;

	}, array_keys($arrayDigits), $arrayDigits);

	return array_sum($mappedArray) % 10 === 0;
}