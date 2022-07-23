<?php
    $a = 10;
    $b = 101;
    function show(){
        // $a = 22;
        global $a, $b;
        echo $a;
        echo $b;
    }
    echo $a;
    echo '<br>';
    show();
    echo '<br>';
    echo var_dump($GLOBALS);
    echo '<br>';
    echo var_dump($GLOBALS['a']);
?>
