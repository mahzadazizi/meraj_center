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
use Illuminate\Support\Facades\Session;










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
//     Route::delete('/users/delete/{UserID}', function ($UserID)
//      {
//         $users=Users::find($UserID);
//         $users->delete();
//         session::flash('message', "رکورد حذف شد.");
//         return redirect('admin/users/userlist');
//       });
    
// });

    Route::get('login',[UsersController::class,'login']);
    Route::get('register',  [UsersController::class,'register']) ;
    Route::post('storeRegister',  [UsersController::class,'storeRegister']) ;
    Route::get('userList',[UsersController::class,'userList']);
    Route::get('editUsers{{UserID}}', [UsersController::class, 'usersEdit'])->name('usersEdit');
    Route::put('editUsersStore', [UsersController::class,'editUsersStore'])->name('editUsersStore');
         
    
      

       
    // Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
    // Route::put('users/{id}', 'UserController@update')->name('users.update');

   