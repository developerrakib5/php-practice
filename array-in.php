<?php

$userImage = $_FILES("userImage");
$extension = "pdf";
$image_format = array("jpg", "Png", "Pdf", "txt");

if(in_array("Png",$image_format)){
    echo "Image Connected";
}
else{
    echo "Image Not Connected";
};


?>