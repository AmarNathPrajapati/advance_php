<?php
    include('config.php');
    if(isset($_POST['submit'])){
        // echo '<pre>';
        // print_r($_FILES);
        // $file = $_FILES["file"];
        // if ($file["error"] == 0){
        // }

        foreach($_FILES['doc']['name'] as $key =>$val){
            $file_path = "media/".$val;
            $file_name = $val;
            move_uploaded_file($_FILES['doc']['tmp_name'][$key],'./media/'.$val);
            $sql = "INSERT INTO `files` (`file_name`, `file_path`) VALUES ('$file_name', '$file_path');";
            $result = mysqli_query($conn,$sql);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload multiple files</title>
</head>
<body>
    <form action="./index.php" method="POST" enctype="multipart/form-data" >
        <input multiple type="file" name="doc[]" id="">
        <input type="submit" name="submit">
    </form>
</body>
</html>