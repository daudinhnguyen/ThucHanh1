<?php
$a = [
 'a' => [
 'b' => 0,
 'c' => 1
 ],
 'b' => [
 'e' => 2,
 'o' => [
 'b' => 3
 ]
 ]
];
//Hãy lấy giá trị = 3 mà có key là b từ mảng trên
echo $a['b']['o']['b']."\n";
//Hãy lấy giá trị = 1 mà có key là c từ mảng trên
echo $a['a']['c']."\n";
//Hãy lấy thông tin của phần tử có key là a
print_r( $a['a'] );
?>
