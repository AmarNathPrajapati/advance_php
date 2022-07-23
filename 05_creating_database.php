<?php
    include("04_config.php");
    //creating a database 
    $sql = 'create database amar';
    $result = mysqli_query($conn,$sql);
    //check whether database is created or not
    if($result){
        echo '<h2 style="colol:blue">Database created successfully.</h2>';
    }else{
        echo 'database was not created due to:'.mysqli_error($conn);
    }
?>