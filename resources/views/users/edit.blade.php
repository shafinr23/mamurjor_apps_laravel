@extends('layout/list') 

@section('content')
<style>
  input{
    width: 20px;
}

</style>
<div class="container">
  <h2>header </h2>
  <form action="{{url('/update')}}<?php echo $user_list_e[0]->id; ?>" method="post" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $user_list_e[0]->email ?>" id="email" placeholder="Enter email">
      <input type="hidden" class="form-control" name="_token" value="<?php echo csrf_token() ?>"  id="email"  placeholder="Enter email">
      <input type="hidden" class="form-control" name="id" value="<?php echo $user_list_e[0]->id ?>"  id="email"  placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pass" value="<?php echo $user_list_e[0]->password ?>"  id="pwd" placeholder="Enter password">
       
    </div>
  
    <button type="submit" class="btn btn-default">UPDATE</button>
  </form>

</div>
@endsection

@yield('footer','registration  here ')