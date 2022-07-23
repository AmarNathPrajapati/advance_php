<?php
    $multArr = array(
        array(2,5,7,8),
        array(1,2,3,1),
        array(4,5,0,1)
    );
    // echo var_dump($mutltArr);
    // echo $mutltArr[1][1];
    for ($i=0; $i < count($multArr); $i++) { 
        for ($j=0; $j < count($multArr[$i]); $j++) { 
            echo $multArr[$i][$j];
            echo " ";
        }
        echo '<br>';
    }
?>