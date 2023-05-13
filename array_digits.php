<?php

$number = 12345;
 $digits_array = number_to_array($number);
print_r($digits_array);


function number_to_array($num) {
    $num_str = strval($num);
    $char_array = str_split($num_str);
    $int_array = array_map('intval', $char_array);
    return $int_array;
}
?>