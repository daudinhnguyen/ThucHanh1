<?php

$numbers = [
 'key1' => 12, 
 'key2' => 30, 
 'key3' => 4, 
 'key4' => -123, 
 'key5' => 1234, 
 'key6' => -12565, 
];

function a($array){
    $firstKey = key($array);
    $firstValue = current($array);
    echo 'Phần tử đầu tiên là: ';
    print_r(Array($firstKey => $firstValue));
    end($array);
    echo 'Phần tử cuối cùng là: ';
    $lastKey = key($array);
    $lastValue = current($array);
    print_r(Array($lastKey => $lastValue));
}
function b($array){
    $max = array_reduce($array, function($a, $b){
        return $b > $a ? $b : $a;
    }, current($array));
    echo "Số lớn nhất là: $max\n";
    $min = array_reduce($array, function($a, $b){
        return $b < $a ? $b : $a;
    }, current($array));
    echo "Số nhỏ nhất là: $min\n";
    $sum = array_reduce($array, function($a, $b){
        return $b + $a;
    }, 0);
    echo "Tổng các giá trị là: $sum\n";
}
function c($array){
    asort($array);
    echo "Sắp xếp theo chiều tăng các giá trị:";
    print_r($array);
    arsort($array);
    echo "Sắp xếp theo chiều giảm các giá trị:";
    print_r($array);
}
function d($array){
    ksort($array);
    echo "Sắp xếp theo chiều tăng các key:";
    print_r($array);
    krsort($array);
    echo "Sắp xếp theo chiều giảm các key:";
    print_r($array);
}
a($numbers);
b($numbers);
c($numbers);
d($numbers);