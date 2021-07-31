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
{{--                {{($success->has('success'))?($success):''}}--}}
                <h3><span style="float:right"><a href="">Add Student</a></span></h3>
              <table class="table table-bordered text-center">
                    <thead>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                    </thead>
                  <tbody>
                  @foreach($data as $key=>$value)
                  <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->email}}</td>
                      <td>{{$value->phone}}</td>
                      <td>{{$value->address}}</td>
                      <td>
                          <a href="{{route('student.delete',$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                          <a href="{{$value->id}}" class="btn btn-primary btn-sm">Edit</a>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>

            </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>
