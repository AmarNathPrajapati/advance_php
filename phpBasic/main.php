<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "this is title" ?>  </title>
    <style>
        *{
            background-color:rgb(46, 44, 44);
            color: rgba(245, 244, 244, 0.856);
        }
    </style>
</head>
<body>
    <!-- <h2> This is my Introduction</h2>
    <form action="/Chandan/" method="POST">
        Name:<br>
        <input type="name" name="name" >
        <br>Roll No.:<br>
        <input type="number" name="rollno"><br>
        Mobile No.:<br>
        <input type="number" name="mobileno"><br>
        <input type="submit">
    </form> -->
    <?php
    // echo "Hello world!"; echo "My name is Amar Nath Prajapati";
    // Echo "I am from Jaunpur <br>";
    // EcHo "I am an Indian";
    // ECHo " I want to become a perfect man <br>";
    // // php is case sensitive language
    // $name = "Amar Nath Prajapati";
    // $age = 19;
    // echo "$name is a good boy <br>";
    // echo "He is $age year old";
    // $a="Amar Nath";
    // $b="Chandan";
    // echo "His name is $a and $b both";
    // echo "<br>";
    // $a = 100;
    // $b=  100.125;
    // echo $a+$b;
    // echo "<br>";
    // echo "$a is greater than $b";
    // echo "<br>";
    // $a = true;
    // $b = false;
    // echo var_dump($a);
    // echo var_dump($b);
    // $a= NULL;
    // echo "<br>";
    // echo var_dump($a);
    // $a=array("Amar","Chandan","Prajapati",234,12);
    // echo var_dump($a);
    // echo "<br>";
    // echo $a[2];
    // echo "<br>";
    // echo $a[1]. $a[2];
    
    // $age=66;
    // if($age<25){
    //     echo "you can't drive the car";
    // }
    // elseif($age>65){
    //     echo "you can't drive the car";
    // }
    // else{
    //     echo "you can drive the car";
    // }

    // $a = 1;
    // while ($a <= 50) {
    //     echo "$a";
    //     echo "<br>";
    //     $a++;
    // }
    
    // $a=10;
    // $b=20;
    // echo "the value of a + b is " .$a + $b;
    // echo $a + $b;
    // echo var_dump($a!=$b);

    // $age=30;
    // switch ($age) {
    //     case 20:
    //         echo "your age is 20";
    //         break;
    //     case 30:
    //         echo "youe age is 30";
    //         break;
    //     case 50:
    //         echo "your age is 50";
    //         break;
    //     default:
    //         echo "your age is $age";
    //         break;
    // }
    // echo "the even number between 0 to 100 <br>";
    // $a=0;
    // while ($a <= 100) {

    //     echo "$a , ";
    //     $a+=2;
    // }
    // echo "<br>";
    // echo "the odd number between 0 to 100 <br>";
    // $a=1;
    // while ($a <= 100) {

    //     echo "$a ,";
    //     $a+=2;
    // }
    // echo "the table of five is  <br>";
    // $a=5;
    // while ($a <= 50) {

    //     echo "$a <br>";
    //     $a+=5;
    // }
    // echo "the table of Six is  <br>";
    // for ($a=6; $a <=60 ; $a+=6) { 
    //     echo "$a <br>";    
    // }
    // echo "the table of Six is  <br>";
    // for ($a=1; $a <=10 ; $a++) { 
    //     echo 6*$a ."<br>";    
    // }
    // $a=100;
    // do{
    //     echo "the value of a is greater than 100";
    // }
    // while($a<10);
    // $a=array(1,3,5,2,5,6);
    // for ($i=0; $i < count($a); $i++) { 
    //     echo "$a[$i],";
    // }
    // echo "<br>";
    // foreach ($a as $i) {
    //     echo "$i,";
    // }
    // $a=15;
    // $b=35;
    // function add(){
    //     global $a,$b;
    //     $a=45;
    //     $b=56;
    //     $sum=$a+$b;
    //     return $sum;
    // }
    // $s=add();
    // echo $a+$b."<br>";
    // echo $s;
    // echo var_dump($GLOBALS["a"]);
    // echo var_dump($GLOBALS["b"]);

    // $a=array(1,3,5,2,4,"Amar Nath","Chandan","Golu");
    // foreach ($a as $value) {
    //     echo $value."<br>";
    // }
    // $b=array("Amar"=>"Php","Chandan"=>"C","golu"=>"HTML");
    // foreach ($b as $key => $value) {
    //     echo" the language of $key is $value <br>";  
    //}
    // $c=array(
    //         array(array(1,2,3,5),
    //         array(3,4,8,9),
    //         array(6,7,8,9)),
    //         array(array(1,2,3,5),
    //         array(3,4,8,9),
    //         array(6,7,8,9)),
    //         array(array(1,2,3,5),
    //         array(3,4,8,9),
    //         array(6,7,8,9))
    // );
    // for ($i=0; $i < 3; $i++) { 
    //     for ($j=0; $j < 3; $j++) { 
    //         for ($k=0; $k < 4; $k++) { 
    //             echo $c[$i][$j][$k]." ";
    //         }
    //         echo "<br>";
    //     }
    //     echo "<br>";
    // }

    //       Connection with database
    // $servername="localhost";
    // $username="root";
    // $password="";
    // $database="Chandan1";
    
    // $conn=mysqli_connect($servername,$username,$password,$database);
    // if($conn){
    //     echo "you are connect with MYSQL successfully<br>";
    // }
    // else{
    //     echo "you are not connect with MYSQL successfully<br>";
    // }
    // if($_SERVER['REQUEST_METHOD']=="POST"){
    //     $name=$_POST['name'];
    //     $rollno=$_POST['rollno'];
    //     $mobileno=$_POST['mobileno'];
        
    // }
                              //Creating database;
    // $sql="CREATE DATABASE Chandan2";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     echo "you created database successfully<br>";
    // }
    // else{
    //     echo "you are fail to creat database<br>";
    // }
    
                              //Creating table in database;

    // $sql="CREATE TABLE `chandan1`.`table2` ( `sno` INT(2) NOT   NULL AUTO_INCREMENT ,  `name` VARCHAR(50) NOT NULL ,  `roll no.` INT(10) NOT NULL ,  `mobile no.` INT(10) NOT NULL ,    PRIMARY KEY  (`sno`))";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     echo "you created a table in $database successfully<br>";
    // }
    // else{
    //     echo "you are fail to creat a table in $database<br>";
    // }
                               //inserting data in table using php
    // $sql="INSERT INTO `table1` (`name`, `roll no.`, `mobile no.`) VALUES ('$name', '$rollno', '$mobileno')";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     echo "you inserted data in table of $database successfully<br>";
    // }
    // else{
    //     echo "you are fail to insert data in table of $database<br>";
    // }

          //select data from database
    // $sql="SELECT * FROM `table1` WHERE `name`='Amar Nath'";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     echo "you select data successfully<br>";
    // }
    // else{
    //     echo "you are fail to select data <br>";
    // }
    // echo mysqli_num_rows($result);
    // echo "<br>";
    // if($result){
    //     $rows=mysqli_fetch_assoc($result);
    //     echo var_dump($rows);
    //     echo "<br>";
    //     $rows=mysqli_fetch_assoc($result);
    //     echo var_dump($rows);
    //     echo "<br>";
    //     $rows=mysqli_fetch_assoc($result);
    //     echo var_dump($rows);
    //     echo "<br>";
    //     $rows=mysqli_fetch_assoc($result);
    //     echo var_dump($rows);
    //     echo "<br>";
    // }
    // while($rows=mysqli_fetch_assoc($result))
    // {
    //     echo $rows['sno']."Hello".$rows['name']."your roll no. is".$rows['roll no.']."Your mobile no. is".$rows['mobile no.'];
    //     echo "<br>";
    // }
             // Update the data
    // $sql="UPDATE `table1` SET `name` = 'Amar Nath' WHERE `name`='Amar Nath Prajapati'";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     echo "you update data successfully<br>";
    // }
    // else{
    //     echo "you are fail to update data <br>";
    // }

                //delete the data
    // $sql="DELETE FROM `table1` WHERE `name` ='Amar Nath' LIMIT 3 ";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     echo "you delete data successfully<br>";
    // }
    // else{
    //     echo "you are fail to delete data <br>";
    // }
    // $aff=mysqli_affected_rows($conn);
    // echo "the number of affected rows are $aff<br>";
    // if($result){
    //     echo "Your program is running successfully<br>";
    // }
    // else{
    //     echo "your program is not running due to".mysqli_error($conn)."<br>";
    // }

    //$a=readfile("Chandan.txt");
    //echo "$a";
    $a=fopen("Chandan.txt","r");
    echo $a;
    $content=fread($a,readfile('Chandan.txt'));
    echo "$content";
    fclose($a);
    ?> 
</body>
</html>
