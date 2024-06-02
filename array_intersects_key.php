<?php

$person_info1 = array(
    "id" => 10,
    "name" => "Rakib",
    "email" => "devrrakib5@gmail.com",
    "cell" => "01743178724"
);
$person_info2 = array(
    "id" => 11,
    "name" => "Rakib1",
    "emailAddress" => "devrrakib52@gmail.com",
    "cellPhone" => "01743178724"
);

$ar_key = array_intersect_key($person_info1, $person_info2);
print_r($ar_key);




?>