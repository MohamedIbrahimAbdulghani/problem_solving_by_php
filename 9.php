<?php

// write function to get factorial number


// 3 => 3 * 2 * 1
// 4 => 4 * 3 * 2 * 1
// 5 => 5 * 4 * 3 * 2 * 1


function getFactorial($number) {
    $factorial = 1;
    for($i = $number; $i >= 1; $i--):
        $factorial = $factorial * $i;
    endfor;
    echo "Factorial of $number is $factorial";
}

getFactorial(7);


// function getFactorial($number) {
//     if($number == 1):
//         return 1;
//     endif;
//     return $number * getFactorial($number - 1);
// }
// echo getFactorial(7);