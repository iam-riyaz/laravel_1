

<!-- dynamic input componet which we are using mulitple times in form.blade.php  -->

<div class="mb-3">
    <label  class="form-label">{{$name}}:</label>
    <input placeholder="{{$label}}" value={{$value}}  name="{{$name}}" type="{{$type}}" class="form-control" value={{old($name)}}  >
    <span class="text-danger">
        <!-- validation user alert msg definer -->
        @error($name)
        {{'*'. $message}} 
        @enderror
    </span>
    <!-- <p>{{$variable}}</p> -->
  </div>



