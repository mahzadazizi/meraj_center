<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;

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

Route::get('/index', function () {
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





