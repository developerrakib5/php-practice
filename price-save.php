<?php

$title =$_POST['title'];
$title =$_POST['Price'];
$title =$_POST['Plan'];
$featurelist =$_POST['featurelist'];
$feature_count = count($featurelist);


for($i=0; $i<$feature_count; $i++){
    echo "feature".$featurelist[$i]."</br>";
}




?>