<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Users;
use Illuminate\Support\Facades\validator;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Mail;
use App\Mail\RegisterEmail;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// index route
Route::get('/', function () {
    return view('index');
});


 // navbar route
Route::get('subject', function () {
    return view('navbar/subject');
});

Route::get('about us', function () {
    return view('navbar/about us');
});
Route::get('contact', function () {
    return view('navbar/contact');
});
Route::get('news', function () {
    return view('navbar/news');
});
Route::get('match', function () {
    return view('navbar/match');
});

Route::get('mailSend',[SendMailController::class , 'send']);


// Route::prefix('admin')->group(function (){

//     Route::get('/users/userlist',[UsersController::class,'userlist']);
//     Route::get('/users/login',[UsersController::class,'login']);
//     Route::get('/users/register',  [UsersController::class,'register']) ;
//     Route::post('/users/storeregister',  [UsersController::class,'storeregister']) ;
//    

    Route::get('userLogin',[UsersController::class,'login']);
    Route::post('usersLogin',[UsersController::class,'usersLogin']);
    Route::get('userRegister',  [UsersController::class,'register']) ;
    Route::post('userStoreRegister',  [UsersController::class,'userStoreRegister']) ;
    Route::get('userList',[UsersController::class,'userList']);
    


    //users edit

    Route::get("editUsers{UserID}", function ($UserID)
    {
       $user=Users::where("UserID",$UserID)->first();
       return  view('admin.users.editUsers',["user"=>$user]);
    });
    
    //users edit store
    
    Route::put('editUsers{UserID}' , function (Request $request,$UserName)
    {
      $validator=validator::make(request()->all() ,
      [
        'UserName'=>'required|min:5|max:15',
        'Password'=>'required' ,
        'FirstName'=>'required' ,
        'LastName'=>'required' ,
      ],
      [
        'UserName.required'=>"نام کاربری را وارد کنید",
        'UserName.min'=>'نام کاربری باید بیش از 5 کاراکتر باشد',
        'UserName.max'=>'نام کاربری باید کمتر از 15 کاراکتر باشد',
        'Password.required'=>"کلمه عبور را وارد کنید",
        'FirstName.required'=>"نام  را وارد کنید",
        'LastName.required'=>"نام خانوادگی را وارد کنید",
      ])->validated();
  
             
      $users=Users::where("UserName",$UserName)->update([
        //  $records=Users::first($UserID)

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
    });

  // users delete
    Route::delete('deleteUsers{UserID}',   function ($UserID)
    { 
            $users=Users::where("UserID",$UserID)->delete();
            session::flash('message', "رکورد حذف شد.");
            return redirect('userList');
    });


    //teachers upload
    Route::get('/uploadfile', [TeacherController::class, 'uploadForm']);
    Route::post('/uploadfile', [TeacherController::class, 'doUpload']);

     //teachers login
    Route::get('teacherLogin',[TeacherController::class,'login']);

    
    // Route::delete('/users/{User}', [UsersController::class, 'deleteUsers'])->name('deleteUsers');
   

