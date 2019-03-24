<?php

//
// This is only a SKELETON file for the "Run Length Encoding" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function encode(string $input) : string
{
    return preg_replace_callback('/(.)\1+/', function ($matches) {
        return strlen($matches[0]) . $matches[1];
    }, $input);
}

function decode(string $input) : string
{
    return preg_replace_callback('/(\d+)(\D)/', function ($matches) {
        return str_repeat($matches[2], $matches[1]);
    }, $input);
}
