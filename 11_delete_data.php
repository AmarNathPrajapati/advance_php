<?php
    include("04_config.php");
    $sql ="DELETE FROM `management` WHERE `management`.`name` = 'lucky'";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo $aff;
?>