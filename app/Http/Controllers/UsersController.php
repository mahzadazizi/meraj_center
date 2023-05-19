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
        $users = Users::where("UserName",request('UserName'));
        if(isset($user)){

          session::flash('message', request('Firstname')."عزیز خوش آمدید");
          return redirect('index');
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

   //users edit

    public function usersEdit($UserID)
    { 
      $users=Users::find($UserID);
        if ($users) {
            return view('admin.users.editUsers',["users"=>$users]);
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
  
             
    
       $users=Users::findOrFail($userID);

        $users->update([

           'UserName'=>$validator['UserName'],
           'Password'=>$validator['Password'],
           'FirstName'=>$validator['FirstName'],
           'LastName'=>$validator['LastName'],
     
        ]);

    

      if ($users)
     {
       session::flash('message', 'اطلاعات ویرایش شد');
       return redirect('userList');
     }
    }
    public function usersDelete($UserID)
    { 
            $users=Users::find($UserID);
            $users->delete();
            session::flash('message', "رکورد حذف شد.");
            return redirect('admin/users/userlist');
    }
        
   
    public  function uploadForm(){
      return view('pages.upload');
  }


  

}
