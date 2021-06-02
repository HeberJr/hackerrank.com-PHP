<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    sort($arr);
    $total = array_sum($arr);
    $newsum = [];    
    for ($i = 0; $i < count($arr); $i++) {
        $newsum[] = $total-$arr[$i];
    }
    $min = min($newsum);
    $max = max($newsum);
    
    echo $min.' '.$max;

}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
