<?php
    include("04_config.php");
    $sql ="UPDATE `management` SET age = 20, email='amar@gmail.com' WHERE `management`.`age` = 20;";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo $aff;
?>