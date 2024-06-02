<?php

// $array_to_value = array(
//     "id" => 10,
//     "Name" => "Rakib",
//     "Age"  => 25,
//     "Email" => "devrakib5@gmail.com",
//     "Cell"  => "01743178724",
// );

// $array_change = array_flip($array_to_value);
// print_r($array_to_value);
// echo "</br>";
// print_r($array_change);

$array_person_info1 = array(
    "id"  => 20,
    "Name" => "Rakib",
    "Age"  => 25,
    "Email" => "devrakib5@gmail.com",
    "Cell"  => "01743178724"
);

$array_person_info2 = array(
    "id" => 21,
    "Name" => "Sakib",
    "Age"  => 26,
    "Email" => "devrakib6@gmail.com",
    "Cell"  => "01743178724"
);

$same_info_collect = array_intersect($array_person_info1,$array_person_info2);
print_r($same_info_collect);

?>