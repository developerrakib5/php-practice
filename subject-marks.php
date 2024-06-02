<?php

$student_marks = array(
    "key"       => 'Sakib',
    "Marks"     => 80,
    "Physices"  => 90,
    "Chemistry" => 85,
    "English"   => 70,
    "Computer"  => 80,
);

$change_key_case = array_change_key_case($student_marks,CASE_UPPER);

foreach($change_key_case as $key => $subject_marks){
    echo $key." ".$subject_marks."</br>";
}












?>