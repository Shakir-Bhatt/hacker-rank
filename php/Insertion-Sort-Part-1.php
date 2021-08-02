<?php

/*
 * Complete the 'insertionSort1' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort1($n, $arr) {
    // Write your code here
    
    
    /*
    2 4 6 8 8 
    2 4 6 6 8 
    2 4 4 6 8 
    2 3 4 6 8 
    */
    
    for($i = 0; $i< count($arr)-1; $i++){
        
        for($j = 1; $j< count($arr)-1; $j++){
            $temp = $arr[$j-1];
            if($temp > $arr[$j]){
                $arr[$j-1] = $arr[$j];
                $arr[$j] = $temp;
                echo $arr[$j]."*".$arr[$j]."*";
            } else {
                echo $temp."-";
            }
        }
        echo "\n";
    }

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);
