<?php

function max_array($arr) {
    rsort($arr);
    $max_number = $arr[0];
    
    return $max_number;
}

$arr = array(132, 345, 523, 732, 239);
echo max_array($arr);