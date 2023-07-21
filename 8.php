<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$result = array(
    'max' => [
        $array[0], strlen($array[0])
    ],
    'min' => [
        $array[0], strlen($array[0])
    ],
);
for($i = 1; $i < count($array); $i++){
    if(strlen($array[$i]) > $result['max'][1]){
        $result['max'] = [$array[$i], strlen($array[$i])];
    }
    if(strlen($array[$i]) < $result['min'][1]){
        $result['min'] = [$array[$i], strlen($array[$i])];
    }
}
echo "Chuỗi lớn nhất là ".$result['max'][0].", độ dài = ".$result['max'][1]."\n";
echo "Chuỗi nhỏ nhất là ".$result['min'][0].", độ dài = ".$result['min'][1];