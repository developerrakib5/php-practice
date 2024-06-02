<?php


$product_info[0] = "Potato";
$product_info[1] = "10";
$product_info[2] = 3;
// var_dump($product_info);
$product_count = count($product_info);
echo $product_count."</br>";
for($i=0; $i<$product_count; $i++){
    echo $i."</br>";
}


?>