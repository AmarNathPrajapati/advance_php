<?php
    $a=fopen("Chandan.txt","r");
    // echo fgets($a)."<br>";
    // echo fgets($a)."<br>";
    // echo fgets($a)."<br>";
    // echo var_dump(fgets($a));
    // while ($b=fgets($a)) {
    //       echo $b;
    // }
    // echo fgetc($a)."<br>";
    // echo fgetc($a)."<br>";
    // echo fgetc($a)."<br>";
    // echo var_dump(fgetc($a));
    // while ($b=fgetc($a)) {
    //       echo $b;
    // }
    while ($b=fgetc($a)) {
        echo $b;
        if($b=="."){
            break;
        }
    fclose($a);
  }    


?>