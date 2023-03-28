<?php
declare(strict_types=1);
// reverse this string without any built in function in php



function reverseString(string $string) {
    $i = strlen($string) - 1;
    $revStr = "";
    while($i >= 0):
        $revStr .= $string[$i];
        $i--;
    endwhile;
    return $revStr;
}


echo reverseString("12345");


// $string = "mohamed";

// $i = 0;
// $length = strlen($string);

// while($i < $length):
//     echo $string[$i] . "<br>";
//     $i++;
// endwhile;