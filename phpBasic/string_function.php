<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color:rgb(46, 44, 44);
            color: rgba(245, 244, 244, 0.856);
        }
    </style>
</head>
<body>
    <?php
    // you can read many string functions from php manual documentation.
    
    $a="             My name is Amar Nath Prajapati,I am from Jaunpur Uttar Pradesh          ";
    echo "<br>";
    echo strlen($a);
    echo "<br>";
    echo str_word_count($a);
    echo "<br>";
    echo strrev($a);
    echo "<br>";
    echo strpos($a,"is");
    echo "<br>";
    echo strpos($a,"a");
    echo "<br>";
    echo str_replace("a","b",$a);
    echo "<br>";
    echo str_repeat($a,5);
    echo "<br>";
    echo $a;
    echo "<pre>";
    echo "<br>";
    echo rtrim("    this is good boy    ");
    echo "<br>";
    echo ltrim("     this is lgood boy     ");
    echo "</pre>";



    ?>  
</body>
</html>