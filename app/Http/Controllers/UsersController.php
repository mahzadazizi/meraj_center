<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

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
  
   
    return view('admin.users.userLogin' );

  
  }




  public function usersLogin(Request $request )

  {

    $validator=validator::make(request()->all() ,
    [
      'UserName'=>'required',
      'Password'=>'required' ,
      

    ],
    [
      'UserName.required'=>"نام کاربری را وارد کنید",
      'Password.required'=>"کلمه عبور را وارد کنید",

    ])->validated();


        $users = Users::where("UserName",request('UserName'))->where("Password",request('Password'))->first();
       
        if(isset($users)){

          session::flash('message'," خوش آمدید");
          return redirect('/')->with(['usres' => $users]);

        }
        else {
          
          return redirect()->back()->withErrors(["کلمه عبور یا رمز ورود اشتباه است"]);
      }
 }
  




  //users register view

  public function register()

  {
    
    return view('admin/users/userRegister' );


  }

  //users register store 

  public function userStoreRegister()
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
   
    

        // public function deleteUsers(Users $user)
        // {
        //     $users=Users::where("UserID",$user->UserID)->first();
        //     $users->delete();
        //     session::flash('message', "رکورد حذف شد.");
        //     return redirect('userList');
        // }
   


}
