<?php

function isIsogram(string $text) : bool {
	$letters = str_split(preg_replace('/[^a-zà-ÿÁ-Ý]/', '', mb_strtolower($text)));
	$repeated = array_filter(array_count_values($letters), function($count){
		return $count > 1;
	});
	return count($repeated) === 0;
}