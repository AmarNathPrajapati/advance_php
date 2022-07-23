<?php
    $fptr  = fopen('myfile1.txt','r');// it return a file pointer
    if(!$fptr){
        die('Don\'t worry my masoom user, it is our fault we will rectify it soon.'); 
    }
    $content = fread($fptr,filesize('myfile1.txt'));
    echo $content;
    fclose($fptr);
?>