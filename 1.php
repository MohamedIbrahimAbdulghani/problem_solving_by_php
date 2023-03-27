<?php

// write a script to all the integer between 2 random numbers and display the sum if the numbers is not odd

$sum = 0;
$start = rand(1, 10);
$end = rand(20, 30);
for($i=$start; $i<=$end; $i++):
    if($i % 2 == 0):
        $sum = $sum + $i;
    endif;
endfor;


echo $start . "<br>";
echo $end . "<br>";
echo $sum;