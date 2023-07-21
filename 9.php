<?php
function convert_array($arrs){
    for($i = 0; $i < count($arrs); $i++){
        if(is_string($arrs[$i]))  $arrs[$i] = strtolower($arrs[$i]);  
    }
    return $arrs;
}
$arrs_1 = ['a', 'b', 'ABC'];
$arrs_2 = ['1', 'B', 'C', 'E'];
$arrs_3 = ['a', 0, null, false];
var_dump(convert_array($arrs_1));
var_dump(convert_array($arrs_2));
var_dump(convert_array($arrs_3));
