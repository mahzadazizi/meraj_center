
@extends('layouts.master1')


@section('title')

uploud file 
 
@endsection 

@section('content')
<br><br><br><br><br><br><br><br><br>
@if(Session::has('success'))
<img src="upload/{{session('newFileName')}}" style="display: block; margin:auto">
@endif 

<form align="center" action="uploadfile" method="POST" enctype="multipart/form-data">
  @csrf
  @method('post')
  <h2>فرم آپلود فایل</h2>
  @if($errors->any())
      <div class="alert alert-danger" role="alert">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach 
                  @else
                      {{session('success')}}
          </ul>
      </div>
   @endif 
    
  <div class="container">       
      <div class="form-group">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
        <label for="fileInput">انتخاب فایل:</label>
        <input type="file" name="fileInput" id="fileInput">
            </tr>
          <thead>
      </div>
      <div class="form-group">
        <input type="submit" value="آپلود فایل">
      </div>
</form>
<br><br><br><br><br><br><br><br><br><br>

@endsection