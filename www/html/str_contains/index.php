<?php

$string = "he felt out of place in the lingerie shop";

if (str_contains($string, 'lingerie')) {
    echo 'lingerieが含まれています';
}

// 大文字と小文字は区別される
if (str_contains($string, 'Lingerie')) {
    echo 'Lingerieが含まれています';
}