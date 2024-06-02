<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your Id is <?php 
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    ?></h1>
</body>
</html>