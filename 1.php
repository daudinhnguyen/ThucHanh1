<?php
function sum($array){
    $sum = $array[0];
    echo 'Tổng các phần tử       = '.$array[0];
    for($i = 1; $i < count($array); $i++){
        $sum += $array[$i];
        echo ' + '.$array[$i];
    }
    echo ' = '.$sum."\n";
}
function sub($array){
    $sub = $array[0];
    echo 'Hiệu các phần tử       = '.$array[0];
    for($i = 1; $i < count($array); $i++){
        $sub -= $array[$i];
        echo ' - '.$array[$i];
    }
    echo ' = '.$sub."\n";
}
function multi($array){
    $multi = $array[0];
    echo 'Tích các phần tử       = '.$array[0];
    for($i = 1; $i < count($array); $i++){
        $multi *= $array[$i];
        echo ' * '.$array[$i];
    }
    echo ' = '.$multi."\n";
}
function div($array){
    $div = $array[0];
    echo 'Thương các phần tử     = '.$array[0];
    for($i = 1; $i < count($array); $i++){
        $div /= $array[$i];
        echo ' / '.$array[$i];
    }
    echo ' = '.$div."\n";
}
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
sum($arrs);
sub($arrs);
multi($arrs);
div($arrs);