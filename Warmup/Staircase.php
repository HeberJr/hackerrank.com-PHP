<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    // Write your code here
    $max = $n;
        for ( $i =1 ; $i <= $max; $i++ ) {
                for ( $space = 1; $space <= ($max-$i); $space++) {
                        echo " ";
                }
                for ( $hash = 1; $hash <= $i; $hash ++ ) {
                        echo "#";
                }
                echo "\n";
        }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);
