<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="fName">
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlentities($_REQUEST['fName']);
    if(empty($name)){
        echo 'Name is required';
    }
    else{
        echo $name;
    }
}
?>

</body> 
</html>

