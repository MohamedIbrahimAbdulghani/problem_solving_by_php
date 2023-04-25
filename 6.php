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
 *          *   *   *   *   *   *   *   *
 *          *   *   *   *   *   *   *                            
 *          *   *   *   *   *   *
 *          *   *   *   *   *
 *          *   *   *   *
 *          *   *   *
 *          *   *
 *          *
 * 
 * 
 * 
 */

for($column = 1; $column <= 8; $column++):
    for($row = 1; $row <= $column; $row++):
        echo " * ";
    endfor;
    echo "<br>";
endfor;

for($column = 8; $column >= 1; $column--):
    for($row = $column; $row >= 1; $row--):
        echo " * ";
    endfor;
    echo "<br>";
endfor;