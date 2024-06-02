<?php

// array_filter() ---------> first array, then callback-function

// $number = array(2,5,8,9,55,63);
// if(!function_exists("checked_odd")){
//     function checked_odd($var){
//        return !($var & 1);
//     };
// };
// $finalArr = array_filter($number,"checked_odd");
// print_r ($finalArr);

// Practice ---01
$price = array(4, 9, 6, 7, 3, 1);
if(!function_exists("checked_fun")){
    function checked_fun($var){
        return ($var & 1);
    };
};
$finalPrice = array_filter($price,"checked_fun");
print_r($finalPrice);

// Practice --->02
$price1 = array(8, 9, 3, 6, 7, 2);
if(!function_exists('checked_fun1')){
    function checked_fun1($var){
        return ($var & 1);
    };
};
$finalPrice1 = array_filter($price1,);
print_r($finalPrice1);

?>