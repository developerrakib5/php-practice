<?php


// Super Global bolte amon ta bujhai jekono jaiga theke access kora jabe
// $GLOBALS;
// $_GET;
// $_POST;
// $_REQUEST;
// $_SERVER;
// $_FILES;
// $_ENV;
// $_COOKIE;
// $_SESSION;


$person_name = 'Hadijaman';
function getName(){
  global $person_name;
// echo $GLOBALS['person_name'];
};
getName();


?>