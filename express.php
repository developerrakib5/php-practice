<?php
$str = 'Learn More And gain knowledge';
$pattern = "/phplearn/i";
echo preg_match($pattern,$str);


$str = 'Learn More And gain knowledge';
$pattern = "/phplearn/i";
echo preg_match_all($pattern,$str);


$str = 'Learn More And gain knowledge';
$pattern = "/phplearn/i";
echo preg_match_all($pattern,"phpmorelearn",$str);


?>