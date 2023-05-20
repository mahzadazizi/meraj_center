@extends('layouts.master1')


@section('title')

   editRegister
 
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
    <div class="container">
    <form style="margin-top:100px" method="POST" action="editUsers{{$user->UserName}}">

      @csrf
      @method('put')
        <div class="form-group">
          <label for="UserName">نام کاربری</label>
          <input type="text" class="form-control" id="UserName" name="UserName" value="{{$user->UserName}}">
        </div>


        <div class="form-group">
          <label for="password">کلمه عبور</label>
          <input type="password" class="form-control" id="Password" name="Password" >
        </div>
        
        
        <div class="form-group"  style="margin-top:5px"> 
          <label for="confirm">تکرار کلمه عبور</label>
          <input type="password" class="form-control" id="confirm" name="confirm">
        </div>



        <div class="form-group"  style="margin-top:20px">
          <label for="FirstName">نام </label>
          <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{$user->FirstName}}" >
        </div>



        <div class="form-group"  style="margin-top:20px">
          <label for="LastName">نام خانوادگی </label>
          <input type="text" class="form-control" id="LastName" name="LastName" value="{{$user->LastName}}">
        </div>


        <button type="submit" class="btn btn-primary"  style="margin-top:20px" >ویرایش </button>
  </form>

    </div>
  </section>
</main>

    <!-- ======= Featured Section ======= -->

  
@endsection