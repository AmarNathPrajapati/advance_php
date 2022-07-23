<?php
    include('./config.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        foreach($name as $index => $names){
            // echo $names."_".$phone[$index];
            $s_name = $names;
            $s_phone = $phone[$index];
            $sql = "INSERT INTO `multirows` (`name`, `Phone`) VALUES ('$s_name', '$s_phone');";
            $result = mysqli_query($conn,$sql);
        }
        if($result){
            echo "Multiple Data Inserted Successfully";
            header("location:index.php");
        }else{
            echo "Data Insertion was not Successfull";
        }
    }
?>