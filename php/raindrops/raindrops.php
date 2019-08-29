<?php


function raindrops($n) : string
{
    $result = '';
    for($i=1; $i<=$n; $i++){
        if($n % $i === 0 && in_array($i, [3, 5, 7])){
            switch($i){
                case 3:
                  $result .= 'Pling';
                break;
                case 5:
                  $result .= 'Plang';
                break;
                case 7:
                  $result .= 'Plong';
                break;
            }
        }
    }
    if(strlen($result) === 0)
        return $n;

    return $result;
}