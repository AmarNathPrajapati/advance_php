<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include('04_config.php');
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $age = $_POST['age'];
        $sql = "INSERT INTO `management` (`name`, `age`, `email`) VALUES ('$name', $age, '$mail');";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Submission Successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else{
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Due to some technical issue, your submission failed.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
    }
   ?>
    <div class="container">
        <form action="08_insert_thru_form.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>