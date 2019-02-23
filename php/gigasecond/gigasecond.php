<?php


function from($date){
	$gigasecs = pow(10, 9);
	$until = clone $date;
	$until->add(new DateInterval('PT'. $gigasecs . 'S'));
	return $until;
}