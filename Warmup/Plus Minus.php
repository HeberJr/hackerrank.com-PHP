<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $pos = 0;
    $neg = 0;
    $zero = 0;
    
    foreach ($arr as $key => $valor){
        if ($valor > 0){
            $pos++;
        }
        elseif ($valor < 0){
            $neg++;
        }
        elseif ($valor == 0){
            $zero++;
        }
        
    }
    
        echo $pos / sizeof($arr) . PHP_EOL;
        echo $neg / sizeof($arr) . PHP_EOL;
        echo $zero / sizeof($arr) . PHP_EOL;


}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
