<?php

$column = array(
    array(
        "Id"      => 1,
        "userName" => "Hadi Jaman",
        "Cell"     => "01743178724",
    ),
    array(
        "Id"      => 2,
        "userName" => "Jaman",
        "Cell"     => "01743178728",
    ),
    array(
        "Id"      => 3,
        "userName" => "Hadi",
        "Cell"     => "01743178729",
    ),
    );


    $userName = array_column($column,'userName');
    print_r($userName[0]);


?>