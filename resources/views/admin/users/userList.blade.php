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



<table   class="table table-striped ">
<tbody>
    <tr>
        <td >user_id</td>
        <td >UserName</td>
        <td >delete</td>
        <td >edit</td>
    </tr>
   


    

   
      @if(count($Users))
        @foreach($Users  as $user)
            
            <tr>
                <td>{{$user->UserID}}</td>
                <td>{{$user->UserName}}</td>
                <td>
                    <form action="admin/users/delete/{{$user->UserID}}" method="post">
                           @csrf
                           @method("delete")
                           <button class="btn btn-danger btn_sm" > delete </button>

                    </form>
                </td>
                <td>
                    <form action="login_edit/{{$user->UserID}}" method="post">
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
<br>
<br>

<div class="pagination">
    
   @if(count($Users))
       {{$Users->links()}}
    @endif 
</div>
@endsection




