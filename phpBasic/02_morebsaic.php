<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2</title>
</head>
<style>
*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
.container{
    background-color: rgb(51, 231, 162);
    max-width: 80%;
    margin:auto;
    padding:20px;
}
</style>
<body>
    <div class="container">
    <h2>Lets us learn About PHP</h2>
    <?php
    $age=15;
    if($age>18)
    {
        echo "you can go to the party";
    }
    elseif($age==10)
    {
        echo "you are 10 years old";
    }
    else{
        echo "you can not go to the party";
    }
    // Array in php
    $arr= array("python","C","HTML","CSS","Java Script");
    echo $arr[0];
    echo $arr[2];
    echo $arr[4];
    echo "<br>";
    echo count($arr);

    // loop in php
    // 1.while loop
    $a=0;
    while($a<=10){
        echo "<br>the value of a is:$a";
        $a++;
    }

    $a=0;
    while($a<count($arr)){
        echo "<br>the value of arr is:$arr[$a]";
        $a++;
    }
    // 2.do while loop
    $a=0;
    do{
    echo "<br>the value of arr is:$arr[$a]";
    $a++;}
    while($a<count($arr));
    
    // 3.For loop in php
    for ($a=0; $a < 10; $a++) { 
        echo "<br>the value of a is:$a";
    }

    // 4.for each loop in php
    foreach($arr as $value){
        echo "<br> the value is:$value";
    }

   // function in php

    function print_number($number)
    {
        echo "<br>your number is : $number";
    }
    print_number(10);
    ?>
    </div>
</body>
</html>