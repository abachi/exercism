<?php


function squareOfSum(int $n) : int
{
    return pow(array_sum(range(1, $n)), 2);
    
}

function sumOfSquares(int $n) : int
{
    return array_sum(array_map(function($number){
        return pow($number, 2);
    }, range(1, $n)));
}

function difference(int $n) : int
{
    return squareOfSum($n) - sumOfSquares($n);
}
