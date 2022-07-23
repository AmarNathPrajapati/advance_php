<?php
$str="my name is Amar Nath Prajapati";
$len=strlen($str);
echo "<br>the length of string is $len";
echo "<br>the length of string is". $len."thank you";
$lenn=str_word_count($str);
echo "<br>the word of string is " . $lenn."thank you";
// $rev= strrev($str);
// echo "<br> the reverse string is :$rev";
echo "<br> the position of is in string:". strpos($str,"is");//count start with zero.
echo "<br> the replace string is :". str_replace("is","at",$str);
?>