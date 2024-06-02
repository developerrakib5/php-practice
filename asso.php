<?php



// Assosiative Array
$infos = array(
    'person_name' => 'Tamim Iqbal',
    'Person_phone'=> '01743178724',
    'Person_address' => 'Mohammadpur-Dhaka',
    'Person_religion' => 'Islam'
);
// echo $infos['person_name'];
foreach($infos as $single_key => $single_value){
    echo $single_key."</br>";
}



// php associative array
$persons_infos = array(
    'name' => 'Mashrafi Morataza',
    'phone' => '01743178724',
    'Address' => 'Mirpur-Dhaka',
    'Nationality' => 'Bangladeshi',
);

// Foreach Associative array call
foreach($persons_infos as $single_persons=>$single_value){
    echo $single_persons."</br>";
    echo $single_value."</br>";
}











?>