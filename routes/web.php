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

Route::get('/', function () {
    return view('index');
});

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

Route::get('/mail/send',[SendMailController::class , 'send']);


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

    Route::get("editUsers/{{UserID}}", function ($UserID)
    {
       $users=Users::find($UserID);
       returnview('admin.users.editUsers');
    })->name('admin.users.editUsers');
    
       
    
    Route::get('editUsers/{{UserID}}', [UsersController::class, 'usersEdit'])->name('usersEdit');
    Route::put('editUsersStore', [UsersController::class,'editUsersStore'])->name('editUsersStore');
    Route::delete('deleteUsers/{{UserID}}', [UsersController::class,'usersDelete']);
    

    // Route::get('/uploads', function () {
    //     return view('admin.teacher.uploadFile');
    // })->name('admin.teacher.uploadFile');
    
    
    
    Route::get('/uploadfile', [TeacherController::class, 'uploadForm']);
    Route::post('/uploadfile', [TeacherController::class, 'doUpload']);
    Route::get('teacherLogin',[TeacherController::class,'login']);

   