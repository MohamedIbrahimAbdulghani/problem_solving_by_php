<?php

// reverse this string without any built in function in php



function reverseString($string) {
    $i = strlen($string) - 1;
    $revStr = "";
    while($i >= 0):
        $revStr .= $string[$i];
        $i--;
    endwhile;
    return $revStr;
}


echo reverseString("alahly");


// $string = "mohamed";

// $i = 0;
// $length = strlen($string);

// while($i < $length):
//     echo $string[$i] . "<br>";
//     $i++;
// endwhile;