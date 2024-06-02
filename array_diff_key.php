<?php
/*
=============================================
01. $array_diff ----------> Just Value Compare 
02. $array_diff_assoc ----> Key & Value Both Change
03. $array_diff_key ------> Just Only Key change
04. $array_fill ----------> Index Array With Value Create Formula
=============================================

*/

$price_list = array(
    "a" => 50,
    "b" => 60,
    "c" => 70,
    "d" => 80,
);

$product_list = array(
    "a" => 50,
    "b" => 60,
    "c" => 70,
    "e" => 90 
);

$product = (array_diff_key($product_list , $price_list));
print_r($product);


?> 