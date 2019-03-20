<?php

function cleanWhitespaces($digits){
	return str_replace(' ', '', trim($digits));
}

function hasOnlyNumbers($digits){
	return (preg_match('/[^0-9]/', $digits)) ? false : true;
}

function isValid(String $digits){
	
	$cleanedDigits = cleanWhitespaces($digits);
	
	if(!hasOnlyNumbers($cleanedDigits))
		return false;

	$digitsLength = strlen($cleanedDigits);
	if($digitsLength < 2)
		return false;
	
	$sum = 0;

	for ($i=$digitsLength-1; $i > -1  ; $i--) {
		$isEven = $digitsLength % 2 === 0 ? $i % 2 === 0 : $i % 2 !== 0;
		$notFirstOne = $i != $digitsLength-1;
			if($isEven && $notFirstOne){
				$doubled = intval($cleanedDigits[$i])*2;
				$sum += ($doubled>9)? $doubled-9 : $doubled;
			}else{
				$sum += intval($cleanedDigits[$i]);
			}
	}
	return $sum % 10 === 0;
}