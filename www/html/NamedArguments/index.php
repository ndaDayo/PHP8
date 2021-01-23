<?php

/**
 * @param string $name
 * @param string $message
 * @return string
 */
function greet(string $name = '', string $message = 'おいっす！')
{
    return $name . 'さん' . $message;
}

echo greet('nda', 'おいっす');

echo greet(name:'志村');