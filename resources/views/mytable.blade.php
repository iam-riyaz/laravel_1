



    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my tabel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
<div ><h1 >{{$title}}</h1></div>


@php
$nam="riyaz";
@endphp
<form action="{{$url}}", method="post">
@csrf
<x-input type="text"  name="name" label="enter name" value='a' />
<!-- <p>
    {{$mytable->name}}
</p> -->

<x-input type="email"  name="email" label="enter email" value='c' />

<x-input type="number"  name="age" label="enter age" value='b' />

<x-input type="text"  name="city" label="enter city" value='d' />

<div class="mb-3">
    <label class="form-label">Gender:</label>
<select name="gender" id="" value='{{$mytable->gender}}' >
    <option value="male">male</option>
    <option value="female">female</option>
    <option value="other">other</option>
</select>
</div>

<x-input type="date"  name="dob" label="enter dob" value="newefjkdjfj" />

<x-input type="password"  name="password" label="enter password"/>

<button  type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



</body>
</html>

