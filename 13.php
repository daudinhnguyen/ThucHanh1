<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 
66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = array_sum($numbers);
$mean = $sum/count($numbers);
echo "Giá trị trung bình của mảng là: ".$mean."\n";
echo "Các số có giá trị lớn hơn $mean là: ";
foreach ($numbers as $value) {
    if ($value > $mean) {
        echo ' '.$value;
    }
}
echo "\n";
echo "Các số có giá trị nhỏ hơn hoặc bằng $mean là: ";
foreach ($numbers as $value) {
    if ($value <= $mean) {
        echo ' '.$value;
    }
}