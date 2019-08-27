<?php


function squareOfSum($n) : int
{
    return pow(array_sum(range(1, $n)), 2);
    
}

function sumOfSquares($n) : int
{
    return array_sum(array_map(function($number){
        return pow($number, 2);
    }, range(1, $n)));
}

function difference($n) : int
{
    return abs(sumOfSquares($n) - squareOfSum($n));
}
