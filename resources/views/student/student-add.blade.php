<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>


<div class="container">
<h3 class="text-center p-2 text-primary">Student Information Add</h3>
<form action="{{route('student.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your email">
        </div>

        <div class="form-group col-md-6">
            <label for="phone">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Your phone">
        </div>
        <div class="form-group col-md-6">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your address">
        </div>

    <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>
