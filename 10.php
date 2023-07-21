<?php
function convert_array($arrs){
    for($i = 0; $i < count($arrs); $i++){
        if(is_string($arrs[$i]))  $arrs[$i] = strtoupper($arrs[$i]);  
    }
    return $arrs;
}
$arrs_1 = ['a', 'b', 'ABC'];
$arrs_2 = ['1', 'b', 'c', 'd'];
$arrs_3 = ['a', 0, null, false];
var_dump(convert_array($arrs_1));
var_dump(convert_array($arrs_2));
var_dump(convert_array($arrs_3));
