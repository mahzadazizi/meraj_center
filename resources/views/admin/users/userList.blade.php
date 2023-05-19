<?php 
use Illuminate\Support\Facades;
?>
@extends('layouts.master1')

@section('content')


<br>
<br>
<br>
<br>
@if(Session::has('message'))
<div style="direction: rtl" class="alert alert-success">
   {{Session::get('message')}}
</div>
@endif

<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">

<table class="table table-striped table-bordered table-hover">
    
                
                    
      
    <thead>
    <tr>
        <th >user_id</th>
        <th >UserName</th>
        <th >delete</th>
        <th >edit</th>
    </tr>
   
   </thead>

    

   <tbody>
      @if(count($Users))
        @foreach($Users  as $user)
            
            <tr>
                <td>{{$user->UserID}}</th>
                <td>{{$user->UserName}}</th>
                <td>
                    <form action="admin/users/delete/{{$user->UserID}}" method="post">
                           @csrf
                           @method("delete")
                           <button class="btn btn-danger btn_sm" > delete </button>

                    </form>
                </td>
                <td>
                    <form action="admin/users/editUsers/{{$user->UserID}}" method="post">
                           @csrf
                           @method("edit")
                           <button class="btn btn-danger btn_sm" > edit</button>

                    </form>
                </td>
            </tr>
        @endforeach 
     @endif

    </tbody>
</table>
         
</div>
</div>
</div>
<br>
<br>

<div class="pagination">
    
   @if(count($Users))
       {{$Users->links()}}
    @endif 
</div>
@endsection




