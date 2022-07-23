    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="Chandan1";
    
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo "you are connect with MYSQL successfully<br>";
    }
    else{
        echo "you are not connect with MYSQL successfully<br>";
    }
    ?>
