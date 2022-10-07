<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- conditional DIRECTIVE START ------------------------------------------- -->
<p> date: {{ date('Dd.M.Y') ?? 'guest '}}</p>
<h1>
    welcome, {{$name ?? "guest"}}
</h1>



<!-- {!xyz!} syntax example -->
<div>
html tag check: {!!$check!!}
</div>




<!-- if() endif() and else DIRECTIVE example -->
@if($name=="")
{{"name is empty"}}
@elseif($name=="riyaz")
{{'name input is accepted'}}
@else
{{'name is wrong'}}
@endif()




<!-- unless and endunless DIRECTIVE example -->
<br>
@unless($name=="lucky")
{{'lucky is missing'}}

@endunless


<!-- isset and endisset DIRECTIVE example -->
<br>
@isset($name)
{{"Name is seted"}}
@endisset


<!-- conditional DIRECTIVE END   ---------------------------------------------- -->




<!-- Looping DIRECTIVE START -->

<!-- for and endfor -->
@for($i=1; $i<=10; $i++)
<h5>
{{$i}}
</h5>
@endfor



<!-- while and endwhile -->
@php $i=5; @endphp
@while($i<=10)

{{$i}}
@php $i++; @endphp

@endwhile


<!-- foreach and endforeach -->
<br>
@php $str=["a","b","c","d","e","f","g"]; @endphp
<select name="" id="">
@foreach($str as $key=> $i)
<option value="{{$key}}">
{{$i}}
</option>
@endforeach
</select>


<!-- break and continue -->
<br>
@for($i=1; $i<=10; $i++)

@if($i==4)
@continue;
@elseif($i==8)
@break;
@endif
{{$i}}

@endfor
<!-- looping directive end---------------------------------------------------------------- -->


<!--

 yield DIRECTIVE is used to display the contents of a given section 

 the section DIRECTIVE, defines a section of contect 

 the extends blade DIRECTIVE to speciify which layout the child view should "inherit -->







</body>
</html>