<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];
$array3 = array_map(function ($arr1, $arr2) {
    return array_merge([$arr2], $arr1);
}, $array1, $array2);

print_r($array3);
