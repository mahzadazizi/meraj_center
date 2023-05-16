<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
// use App\Models\Users;
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

Route::get('/navbar/subject', function () {
    return view('subject');
});

Route::get('/navbar/about', function () {
    return view('about');
});
Route::get('/navbar/contact', function () {
    return view('contact');
});
Route::get('/navbar/news', function () {
    return view('news');
});
Route::get('/navbar/match', function () {
    return view('match');
});

Route::get('/mail/send',[SendMailController::class , 'send']);


Route::prefix('admin')->group(function (){

    Route::get('/users/userlist',[UsersController::class,'userlist']);
    Route::get('/users/login',[UsersController::class,'login']);
    Route::get('/users/register',  [UsersController::class,'register']) ;
    Route::post('/users/storeregister',  [UsersController::class,'storeregister']) ;
    Route::delete('/users/delete/{UserID}', function ($UserID)
     {
        $users=Users::find($UserID);
        $users->delete();
        session::flash('message', "رکورد حذف شد.");
        return redirect('admin/users/userlist');
      });
    
});



