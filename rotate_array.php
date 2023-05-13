<?php

function rotate_array(&$arr, $k) {
    $n = count($arr);
    
    $k = $k % $n; 
    
    for ($i = 0; $i < $k / 2; $i++) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$k - $i - 1];
        $arr[$k - $i - 1] = $tmp;
    }
    for ($i = $k; $i < ($n + $k) / 2; $i++) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$n + $k - $i - 1];
        $arr[$n + $k - $i - 1] = $tmp;
    }
    
    for ($i = 0; $i < $n / 2; $i++) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$n - $i - 1];
        $arr[$n - $i - 1] = $tmp;
    }
}

$arr = array(1, 2, 3, 4, 5, 6);
rotate_array($arr, 2);
print_r($arr);

?>