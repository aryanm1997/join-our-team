About You.

1)My name is Arya N. M. I am from Kottayam. I received my MCA from SJCET Pala and post-graduated in 2020.My family consists of five people, including myself. I have around 2 years of experience in PHP.

2)Visual Studio

Social Profile

 1)https://github.com/

 2)www.linkedin.com/in/arya-nm
 The real stuff.

 1)PHP

2) <?php

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

4)
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