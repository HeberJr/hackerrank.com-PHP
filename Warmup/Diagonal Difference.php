<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $esquerda = 0; 
    $direita = 0;
    $conta_total = count($arr) -1;
    
    foreach($arr as $i => $ival){
          
        foreach($ival as $j => $jval){
            if($j == $i){
                $esquerda = $esquerda + $jval;
            }
            if($j == $conta_total){
                $direita = $direita + $jval;
            }
        }
        $conta_total--;
    }
     return abs($esquerda - $direita);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
