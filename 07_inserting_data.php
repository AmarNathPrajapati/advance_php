<?php
    include("04_config.php");
    //inserting data
    $name = 'lucky';
    $age = 10;
    $mail = 'luckyboy@gmail.com';
    $sql = "INSERT INTO `management` (`name`, `age`, `email`) VALUES ('$name', '$age', '$mail');";
    $result = mysqli_query($conn, $sql);
    //check data is inserted or not
    if($result){
        echo '<h2 style="colol:blue">data created successfully.</h2>';
    }else{
        echo 'data was not created due to:'.mysqli_error($conn);
    }
?>