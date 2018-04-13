@extends('layout/list') 

@section('content')
<style>
 
</style>
<div class="container">
    <div class="box" style="width: 500;">
    <h2>user list</h2>
    <p>
      {{-- {{ Session::get('mes') }} --}}
    
      @if(Session::has('mes'))
      {{ Session::get('mes') }}
      @endif
      
      @if(Session::has('del'))
    {{ Session::get('del') }}
    @endif
    </p>            
    <table class="table">
      <thead>
        
        <tr>
         <th>action</th>
         <th>del </th>
          <th>email</th>
          <th>pass</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($users as $user) 
        <tr>
        <td><a href="{{url('/edit')}}/{{$user->id}}">edit</a></td>
        <td><a href="{{url('/del')}}/{{$user->id}}">delate</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
         
          
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@endsection

@yield('footer','registration  here ')