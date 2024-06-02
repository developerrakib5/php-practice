<?php

// 01. array_diff;
// 02. array_diff_assoc;

// Array_diff sudhu value match kore
// Array_diff er maddhome prothom tar value er sathe baki sob gulor valu add kore compare korar kaj ta kora hoy


// Next a ace array_diff_assoc er maddhome sob gulor key abong value duitar e compare kora hoy


$product_list = array(
    "a" => 50,
    "b" => 60,
    "c" => 70,
    "d" => 80
);
$another_product_list = array(
    "a" => 50,
    "b" => 60,
    "c" => 70
);
$product_diff = array_diff($product_list, $another_product_list);
print_r ($product_diff);



?>