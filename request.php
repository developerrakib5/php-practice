<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <label for="userName">UserName</label>
      <input type="text" name="userName">
      <button>Submit</button>
    </form>

    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $userName = $_REQUEST['userName'];
        
    }
    
    ?>
</body>
</html>