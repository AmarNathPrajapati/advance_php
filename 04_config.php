<?php
    //Procedural and object oriented method both can be used.
    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "amar";

    //connecting with procedural method
    $conn = mysqli_connect($servername, $username, $password, $database);
    //check the connection
    if($conn){
        echo '<h1 style="color:green">Successfully Connected to Database </h1>';
    }else{
        die("connection failed to connect: ".mysqli_connect_error());
    }
?>