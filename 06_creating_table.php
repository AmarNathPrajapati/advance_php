<?php
    include("04_config.php");
    //creating table
    $sql = "CREATE TABLE `management` ( `sno` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `age` INT(5) NOT NULL , `email` VARCHAR(50) NOT NULL , PRIMARY KEY (`sno`));
    ";
    $result = mysqli_query($conn, $sql);
    //check table is created or not;
    if($result){
        echo '<h2 style="colol:blue">table created successfully.</h2>';
    }else{
        echo 'table was not created due to:'.mysqli_error($conn);
    }
?>