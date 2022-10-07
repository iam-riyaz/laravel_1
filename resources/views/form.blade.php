<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
•<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body >
    
<div class="container">
<form action="{{url("/")}}/form", method="post">
 @csrf  <!-- to generate a token for form -->
 
@php
 $variable=788;  
@endphp
<!-- this imput component is writen using input.blade and view/componets/input.php ----------->

<x-input type="text"  name="name" label="enter name" :variable=$variable />

<x-input type="email"  name="email" label="enter email"/>

<x-input type="number"  name="age" label="enter age"/>

<x-input type="number"  name="mobile" label="enter mobile"/>

<x-input type="password"  name="password" label="enter password"/>

<!-- ------------------------------------------------------------- -->

  <button  type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>