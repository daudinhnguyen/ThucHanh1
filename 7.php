<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
echo 'Các số từ 100 đến 200 và chia hết cho 5 trong mảng là:';
array_map(function($item) {
    if($item >= 100 && $item <=200 && $item % 5 == 0){
        echo ' '.$item;
    }
}, $array);