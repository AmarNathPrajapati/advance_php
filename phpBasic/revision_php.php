<?php
//normal array
    $arr = array("amar","chandan","golu");
    foreach($arr as $value){
        echo $value;
        echo "<br>";
    }
//associative array
    $arr2 = array(
        "name"=>"Chandan",
        "age"=>20,
        "programmer"=>true
    );
    echo $arr2['name'];
     echo "<br>";
    echo $arr2['age'];
     echo "<br>";
    echo $arr2['programmer'];
     echo "<br>";
//php date
    $year = date("d D M Y");
    echo $year;
?>
