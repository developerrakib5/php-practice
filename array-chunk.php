<?php

$persons_info = array(
    "Name" => "Tamim",
    "Age"  => 25,
    "Occupation" => "Cricketer",
    "Position"   => "Left-Handed Batsman",
    "Address"    => "Mirpur-Dhaka",
);

$devided = array_chunk($persons_info,2);
var_dump($devided);





?>