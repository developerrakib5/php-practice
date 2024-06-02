<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username"></br></br>
    <label for="email">Email: </label>
    <input type="email" name="email"></br></br>
    <button type="submit">Submit</button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $emai     = $_POST['email'];

    if(!empty($username)){
        echo $username;
    }
    else{
        echo 'Please Enter A Value';
    }
}
?>
</body>
</html>