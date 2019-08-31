<?php


function sieve(int $n) : array
{
    $primes = [];
    $temp = 0;

    for($i=1; $i<=$n; $i++){
        for($j= 1; $j<=$i; $j++){
            if($i % $j === 0)
                $temp += 1;
        }
        if($temp === 2)
            $primes[] = $i;
        
        $temp = 0;
    }

    return $primes;
}