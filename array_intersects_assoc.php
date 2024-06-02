<?php

$person_info1 = array(
    "id"  => 10,
    "Name" => "Rakib",
    "Age"  => 25,
    "Email" => "devrakib5@gmail.com",
    "Cell"  => "01743178724"
);
$person_info2 = array(
    "id"  => 11,
    "Name" => "Rakib1",
    "Age"  => 251,
    "Email" => "devrakib51@gmail.com",
    "Cell"  => "01743178724"
);

$allSame = array_intersect_assoc($person_info1, $person_info2);
print_r($allSame);


?>