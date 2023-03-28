<?php


// draw this pattern 

/**
 * 
 *          *
 *          *   *
 *          *   *   *
 *          *   *   *   *
 *          *   *   *   *   *
 *          *   *   *   *   *   *
 *          *   *   *   *   *   *   *
 *          *   *   *   *   *   *   *   *
 *          *   *   *   *   *   *   *   *   *
 *          *   *   *   *   *   *   *   *   *   *   
 * 
 * 
 * 
 */


for($c = 1; $c <= 10; $c++):
    for($r = 1; $r <= $c; $r++):
        echo "* ";
    endfor;
    echo "<br>";
endfor;