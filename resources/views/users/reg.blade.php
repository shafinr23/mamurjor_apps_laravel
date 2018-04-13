@extends('layout/list') 

@section('content')
<style>
  input{
    width: 20px;
}

</style>
<div class="container">
  <h2>header </h2>
 
    <?php echo Form::open(array('url'=>'reg/user','method'=>'POST', 'files'=>true)); ?>
    <div class="form-group">
      <?php echo  Form::label('email','enter your email'); ?>

      <?php echo  Form::email('email','enter your email',array( 'class' => 'form-control' ) ); ?>
      <input type="hidden" class="form-control" name="_token" value="<?php echo csrf_token() ?>" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
  
      <?php echo  Form::label('pass','enter your pass'); ?>
     
     <?php echo Form::password('pass', array('class' => 'form-control','placeholder'=>'give your pass')) ;?>
       
    </div>
    <div class="form-group">
  
      <?php echo  Form::label('image','enter your file'); ?>
     
     <?php echo Form::file('image', array('class' => 'form-control','placeholder'=>'give your pass')) ;?>
       
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>

  <?php echo Form::close();?>
 
</div>
@endsection

@yield('footer','registration  here ')