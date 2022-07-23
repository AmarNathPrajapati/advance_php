<?php
    session_start();
    $otp=rand(10000,99999);
    $_SESSION['otp']=$otp;
    $email=$_POST['email'];
    $receiver="$email";
    $subject="Message throgh Localhost";
    $body="your otp no. is $otp";
    $sender="From:amarnathjnp2002@gmail.com";
    if(mail($receiver,$subject,$body,$sender)){
        //echo "Email sent successfully to $receiver";
    }else{
        echo "Sorry , failed while sending mail";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>varify otp</title>
</head>
<body>
    <form action="register.php" method="post">
        Enter your OTP: <input type="number" name="otp">
        <input type="submit" value="Varify OTP">
    </form>
</body>
</html>
