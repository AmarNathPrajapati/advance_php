<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserting multiple rows</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <a href="javascript:void(0)" class="btn btn-primary float-end add_form">Add More</a>
        <form action="./upload.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <label for="name">Name</label>
                    <input required class="form-control" type="text" id="name" name="name[]" placeholder="Enter your Name">
                </div>
                <div class="col-md-4">
                    <label for="phone">Phone</label>
                    <input required class="form-control" type="text" id="phone" name="phone[]" placeholder="Enter your Phone No.">
                </div>
                <div class="adding_form">
    
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit" name="submit">Save All Data</button>
        </form>
    </div>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- bootstrap script cdn -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        //adding remove functionality
        // adding more form
        $(document).on("click",'.add_form',function(){
            $('.adding_form').append(' <div class="row main_row">\
                <div class="col-md-4">\
                <label for="name">Name</label>\
                <input required class="form-control" type="text" id="name" name="name[]" placeholder="Enter\ your Name">\
                </div>\
                <div class="col-md-4">\
                <label for="phone">Phone</label>\
                <input required class="form-control" type="text" id="phone" name="phone[]" \placeholder="Enter your Phone No.">\
                </div>\
                <div class="col-md-4">\
                <button class="btn btn-danger remove_btn mt-4">Remove</button>\
                </div>\
                </div>\
                ');
            })
        $(document).on('click','.remove_btn',function(){
            $(this).closest('.main_row').remove();
        })
    })
</script>
</body>
</html>