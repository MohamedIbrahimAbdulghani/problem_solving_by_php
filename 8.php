<?php


// write a php function that inserts a new element in an array in any position

$original_array = array(1, 2, 3, 4, 5, 7, 8, 9, 10);

function addElement($array_name, $element, $position_of_element) {
    $new_array = [];
    foreach($array_name as $key => $value):
        if($position_of_element == $key):
            $new_array[] = $element;
        endif;
            $new_array[] = $value;
    endforeach;
    return $new_array;
}

// call the function
echo "<pre>";
print_r(addElement($original_array, 10, 3));

echo "<pre>";
print_r(addElement($original_array, 6, 5));
