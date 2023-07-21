<?php
$array = array(1, 2, 3, 4, 5);
print_r($array);
unset($array[3]);
$array = array_values($array);
print_r($array);