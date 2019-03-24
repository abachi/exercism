<?php

//
// This is only a SKELETON file for the "Run Length Encoding" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function encode($input) : string
{
    $letters = str_split($input);
    $n = count($letters);
    $frequences = [];
    $repeated = 0;
    $j = 0;
    for ($i=0; $i < $n; $i++) {
        if ($letters[$j] === $letters[$i]) {
            $repeated++;
        } else {
            $frequences[] = ($repeated>1) ? $repeated.$letters[$j] : $letters[$j];
            $j = $i;
            $repeated = 1;
        }
    }
    if ($repeated > 0 && $i === $n) {
        $frequences[] = ($repeated>1) ? $repeated.$letters[$i-1] : $letters[$i-1];
    }
    return implode('', $frequences);
}

function decode($input) : string
{
    if (!strlen($input) > 0) {
        return '';
    }

    if (!is_numeric($input[0])) {
        $input = '1'.$input;
    }
    
    do {
        $input = preg_replace('/([a-zA-Z ])([a-zA-Z ])/', '${1}1${2}', $input, -1, $count);
    } while ($count > 0);

    $input = trim(preg_replace('/([0-9]+[a-zA-Z ])/', '${1},', $input), ',');
    $letters = explode(',', $input);
    
    $chars = '';
    foreach ($letters as $letter) {
        $n = intval(substr($letter, 0, -1));
        $char = $letter[strlen($letter)-1];
        $chars .= str_repeat($char, $n);
    }
    return $chars;
}
