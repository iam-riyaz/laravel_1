<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/mytable/create')}}">My Table Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/mytable')}}">My Table View</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
  <br>
  <a href="{{route('mytable.create')}}">
<button type="button" class="btn btn-primary">Add</button>
</a>
<br>
<br>
  <table class="table">
    <thead>
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>Gender</th>
            <th>DoB</th>
            <th>created at</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
      
     <!-- select in data using orm -->
         @foreach($mytable_view as $data)
        <tr>
          <td>{{$data -> name }}</td>
          <td>{{$data -> email }}</td>
          <td>{{$data -> age }}</td>
          <td>{{$data -> city }}</td>
          <td>{{$data -> gender }}</td>
          <td>{{$data -> dob }}</td>
          <td>{{$data -> created_at }}</td>
          <td>
            <a href=" {{route('mytable.delete',['id'=>$data->mytable_id])}} ">
            <button type="button" class="btn btn-danger">Delete</button>
            </a>
            <a href="{{route('mytable.edit',['id'=>$data->mytable_id])}}">
            <button type="button" class="btn btn-info">Edit</button>
            </a>
        </td>
          
           
        </tr> 
        
        @endforeach
    </tbody>
  </table>
  </div>




   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>