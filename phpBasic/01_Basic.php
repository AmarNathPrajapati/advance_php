<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <div class="container">
    this is my first php websites.
    <?php
    define('pi',3.14);
    echo "Hello world";
    // single line comment
    /*this 
    is 
    multiline
    comment*/
    $var1 = 50;
    $var2 = 25;
    echo $var1;
    echo $var2;
    echo $var1+$var2;
    // Airthmatic operator in PHP
    echo"<br>";
    echo "the value of var1+var2 is :";
    echo $var1+$var2;
    echo"<br>";
    echo "the value of var1-var2 is :";
    echo $var1-$var2;
    echo"<br>";
    echo "the value of var1*var2 is :";
    echo $var1*$var2;
    echo"<br>";
    echo "the value of var1/var2 is :";
    echo $var1/$var2;

    // Assignment operator in PHP
    echo "<br>";
    $nvar=$var1;
    echo "the value of new variable is :";
    echo $nvar;
    echo "<br>";
    $nvar+=1;
    echo "the value of new variable is :";
    echo $nvar;
    echo "<br>";
    $nvar-=2;
    echo "the value of new variable is :";
    echo $nvar;
    echo "<br>";
    $nvar*=3;
    echo "the value of new variable is :";
    echo $nvar;
    echo "<br>";
    $nvar/=4;
    echo "the value of new variable is :";
    echo $nvar;

    // comparision operatr in PHP 
    echo "<br>";
    echo "the value of 1==4 is:";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is:";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is:";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is:";
    echo var_dump(1<=4);

    // increment and decrement operator in PHP
    echo "<br>";
    echo $var1++;
    echo "<br>";
    echo $var1;
    // echo $var1--;
    // echo ++$var1;
    // echo --$var1;
    
    // Logical operator in php
    // and(&&)
    // or(||)
    // xor
    // not(!)

    $var3= (true and false);
    echo "<br>";
    echo var_dump($var3);
    $var4= (true or false);
    echo "<br>";
    echo var_dump($var4);
    $var5= ( !false);
    echo "<br>";
    echo var_dump($var5);
    $var6= (true xor false);
    echo "<br>";
    echo var_dump($var6);
    $var3= (true && false);
    echo "<br>";
    echo var_dump($var3);
    $var4= (true || false);
    echo "<br>";
    echo var_dump($var4);

    // Data types in php
    echo "<br> String Data type<br>";
    $str="this is string data type";
    echo var_dump($str);
    echo "<br> integer Data type<br>";
    $int=101;
    echo var_dump($int);
    echo "<br> float Data type<br>";
    $flt=1.1;
    echo var_dump($flt);
    echo "<br> boolean Data type<br>";
    $bln=true;
    echo var_dump($bln);
    echo "<br>";
    echo pi;

    ?>
    </div>
</body>
</html>