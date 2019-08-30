<?php


function isPangram(string $text) : bool
{
    if(strlen($text) === 0)
        return false;
    
    $alphabet = range(97, 122);
    $text = str_split(preg_replace('/[^a-z]/', '', strtolower($text)));
    
    foreach($alphabet as $ascii){
        if( !in_array(chr($ascii), $text))
            return false;
    }

    return true;
}