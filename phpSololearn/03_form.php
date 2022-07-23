<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome</h2><?php
        echo $_POST['name'];
    ?>
    <h3>You are </h3><?php
        echo $_POST['age']
    ?>years old;
</body>
</html>