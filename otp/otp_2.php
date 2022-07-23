<?php
    session_start();
    $otp = $_POST['otp'];
    if($otp==$_SESSION['otp']){
        echo "
            <script>
            alert('Registration Successful');
            </script>
        ";
        include "login.html";
    }
?>
