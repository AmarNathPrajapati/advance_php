<?php
    $fptr = fopen('myfile.txt','r');
    // $a = fgets($fptr);// it print line by line and after pointer point to the next line.
    // echo $a;
    // echo '<br>';
    // $a = fgets($fptr);
    // echo $a;
    // echo '<br>';
    // $a = fgets($fptr);
    // echo $a;
    // echo '<br>';

    // while($a = fgets($fptr)){
    //     echo $a;
    //     echo '<br>';
    // }

    while($b = fgetc($fptr)){
        echo $b;
        if($b=='y'){
            break;
        }
    }

?>  