<?php

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar) {
    // Write your code here
    $lenght = count($ar);
    $somaTotal = 0;
    for ($let=0; $let < $lenght; $let++) { 
        $somaTotal += $ar[$let];
    }
    return $somaTotal;
}
    

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
