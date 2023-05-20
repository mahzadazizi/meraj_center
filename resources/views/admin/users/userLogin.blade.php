@extends('layouts.master1')


@section('title')

users login
 
@endsection 


@section('content')
  
@if ($errors->any())
<div class="alert alert-danger" >
   <ul>
        @foreach ($errors->all() as $error)
          <li>
             {{ $error}};
          </li>
  
        @endforeach
   </ul> 
</div>
@endif



  <main id="main">
    <section id="featured" class="featured">
      <div class="container" style="padding-left:30%;padding-right:30%;">

      <form style="margin-top:100px" method="POST" action="usersLogin">
  
       @csrf
        <div class="form-group">
          <label for="UserName">نام کاربری</label>
          <input type="text" class="form-control" id="text" name="UserName" value="">
          <small id='emailHelp' class='form-text text-danger'>
        </div>


        <div class="form-group">
          <label for="Password">کلمه عبور</label>
          <input type="password" class="form-control" id="Password" name="Password" >
        </div>


        <button type="submit" class="form-control btn btn-primary"  style="margin-top:20px" >ورود</button>
        </form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>



      </div>
    </section>
  </main>

@endsection