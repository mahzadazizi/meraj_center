<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Users;

class UsersController extends Controller

{
 //users list view
  
  public function userList()

  {
  
   $records=Users::latest()->paginate(4);
   return view('admin/users/userList',['Users'=>$records]);

  
  
  }

  //users login view

  public function login()

  {
  
   
    return view('admin.users.login' );

  
  }
  //users register view

  public function register()

  {
    
    return view('admin/users/register' );


  }

  //users register store 

  public function storeRegister()
  {
      $validator=validator::make(request()->all() ,
          [
            'UserName'=>'required|min:5|max:15',
            'Password'=>'required' ,
            

          ],
          [
            'UserName.required'=>"نام کاربری را وارد کنید",
            'UserName.min'=>'نام کاربری باید بیش از 5 کاراکتر باشد',
            'UserName.max'=>'نام کاربری باید کمتر از 15 کاراکتر باشد',
            'Password.required'=>"کلمه عبور را وارد کنید",

          ])->validated();
      
                 
        
           $users= new Users();

          $users->UserName=request('UserName');
          $users->Password=request('Password');
          $users->FirstName=request('FirstName');
          $users->LastName=request('LastName');
          $users->save();

        
    
        if ($users)
        {
           session::flash('message', 'عملیات با موفقیت انجام شد.');
           return redirect('userList');
        }
    }

   //users edit

    public function usersEdit($UserID)
    { 
      $users=Users::find($UserID);
        if ($users) {
            return view('admin.users.editUsers')->with("users",$users);
         }
    }


   //users edit store

    public function editUsersStore(Request $request, $userID)
    {
      $validator=validator::make(request()->all() ,
      [
        'UserName'=>'required|min:5|max:15',
        'Password'=>'required' ,
        

      ],
      [
        'UserName.required'=>"نام کاربری را وارد کنید",
        'UserName.min'=>'نام کاربری باید بیش از 5 کاراکتر باشد',
        'UserName.max'=>'نام کاربری باید کمتر از 15 کاراکتر باشد',
        'Password.required'=>"کلمه عبور را وارد کنید",

      ])->validated();
  
             
    
       $users= new Users();

      $users->UserName=request('UserName');
      $users->Password=request('Password');
      $users->FirstName=request('FirstName');
      $users->LastName=request('LastName');
      $users->save();

    

      if ($users)
     {
       session::flash('message', 'اطلاعات ویرایش شد');
       return redirect('userList');
     }
    }
   

}
