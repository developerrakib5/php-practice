<?php

$person_info = array(
    "key"  => "value",
    "Name" => "Rakib",
    "Address" => "Mohammadpur-Dhaka",
    "email"  => "devrakib5@gmail.com",
);
// echo $person_info['key']."</br>";
// echo $person_info['Name']."</br>";
// echo $person_info['Address']."</br>";

foreach($person_info as $single_value){
    echo $single_value."</br>";
}


?>