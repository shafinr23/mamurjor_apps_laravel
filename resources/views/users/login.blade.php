@extends('layout.list-login')
@section('sidebar');
<div class="container">
        <h2><?php echo $key; ?> </h2>
        <form action="reg/user" method="post" >
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            <input type="hidden" class="form-control" name="_token" value="<?php echo csrf_token() ?>" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pass"  id="pwd" placeholder="Enter password">
             
          </div>
        
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div>
@stop

@section('content')
<div class="container">
  
       mamurjor is try to make something new .  
  
</div>

@endsection
@yield('footer','login here ')