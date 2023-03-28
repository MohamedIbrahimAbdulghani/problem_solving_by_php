<?php

// write a php function to get a minimum number in array

$numbers = [5, 6, 9, 8, 2, 5, 6, 3, 1, -3, 4, 7, 8, 9, 0, 6, -2, 21, 3];


// echo min($array);

function getSmallNumber($array) {
    if(!empty($array)):
        $small_number = $array[0];
        foreach($array as $value):
            if($small_number > $value):
                $small_number = $value;
            endif;
        endforeach;
        return "the small number is : " . $small_number;
    else:
        echo "please enter data in your array";
        return false;
    endif;
}

echo getSmallNumber($numbers);