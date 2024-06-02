<?php

$persons_info = array(
    'Person_name' => 'HadiJaman',
    // 'Person_age'  => 20,
    'Person_address' => 'Mirpur',
    'A'              => 'A',
    'Z'              =>  'Z',
);
// asort($persons_info);
// arsort($persons_info);
// ksort($persons_info);
krsort($persons_info);
foreach($persons_info as $key => $value){
    echo $key.'</br>';
}









?>