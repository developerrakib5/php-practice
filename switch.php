<?php
$today_Date = date("D");
switch($today_Date){
    case $today_Date=="Wed":
    echo 'Today is thursday</br>';
    break;

default:
echo 'Today is not thursday</br>';

}

$subject_name = "Bangla";
switch($subject_name){
    case $subject_name=="Bangla":
        echo 'Bangla is a demandful subject';
        break;

    default:
    echo "Every Subject is a demand Subject so don't worry";

}



?>