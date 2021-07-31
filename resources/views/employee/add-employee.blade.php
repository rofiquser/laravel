<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
    <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <br>
              <br>
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Add Employee</h3>
                <a href="{{ route('employee.index') }}" class="btn btn-success btn-sm"><i class="fa fa-list"></i> Employee List</a>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                    @include('inc.message')
                    <form action="{{ route('employee.store') }}" method="post">
                      @csrf
                        <br>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" required/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" name="department" id="department" placeholder="Enter Department" class="form-control" required/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" name="designation" id="designation" placeholder="Enter Designation" class="form-control" required/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" name="salary" id="salary" placeholder="Enter Salary" class="form-control" required/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter Address" class="form-control" required/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer"></div>
            </div>

          </div>

        </div><!-- /.row (main row) -->
        <br>
        <br>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>