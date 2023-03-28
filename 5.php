<?php

// write a php function to get maximum number in array


$numbers = [5, 6, 9, 8, 2, 5, 6, 3, 1, 4, -10, 7, 8, 9, 0, 6, -2, 21, 50, 3];

function getMaxNumber($array) {
    if(!empty($array)):
        $max_number = $array[0];
        foreach($array as $value):
            if($max_number < $value):
                $max_number = $value;
            endif;
        endforeach;
        return "the max number is : " . $max_number;
    else:
        echo "please enter data in your array";
        return false;
    endif;
}

echo getMaxNumber($numbers);