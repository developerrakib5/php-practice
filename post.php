<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
     <label for="username">UserName: </label>
     <input type="text" name="username"></br></br>
     <label for="username">Email: </label>
     <input type="email" name="email"></br></br>
     <button type="submit">Submit</button>
    </form>


    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $email    = $_POST['email'];


        if(!empty($username)){
            echo $username.$email;
        }
        else{
            echo 'User Name is faka';
        }
    }
    ?>





</body>
</html>