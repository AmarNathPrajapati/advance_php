<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap:1rem;
        }

    </style>
</head>
<body>
    <!-- <form action="03_form.php" method="POST">
        Name: <input type="text" placeholder="Enter The Name" name="name">
        Age: <input type="text" placeholder="Enter The Age" name="age">
        <button type="submit">SUBMIT</button>
    </form> -->
    <form action="04_get.php" method="GET">
        Name: <input type="text" placeholder="Enter The Name" name="name">
        Age: <input type="text" placeholder="Enter The Age" name="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>