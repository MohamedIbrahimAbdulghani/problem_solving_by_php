<?php


// write a php function that inserts a new item in an array in any position


$original_array = array(1, 2, 3, 4, 5, 7, 8, 9);

function addElement($original_array, $element, $index) {
    $new_array = [];
    foreach($original_array as $key => $value):
        if($index == $key):
            $new_array[] = $element;
        endif;
        $new_array[] = $value;
        // echo "$key : $value" . "<br>";
    endforeach;
    return $new_array;
}
echo "<pre>";
print_r(addElement($original_array, 6, 5));