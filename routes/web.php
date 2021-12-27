<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/userlist', function () {
    return view('viewuser');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/userget', function () {
    return view('edituser');
});

Route::get('/search', function () {
    return view('viewuser');
});


Route::post('/register',[UserController::class, 'register']);
Route::get('/userlist',[UserController::class, 'listuser']);
Route::post('/userlist',[UserController::class, 'search']);
Route::post('/login',[UserController::class, 'login']);
Route::post('/logout',[UserController::class, 'logout']);
Route::get('/userdelete',[UserController::class, 'deleteuser']);

Route::get('/userget',[UserController::class, 'getuser']);
Route::post('/useredit',[UserController::class, 'edituser']);

Route::get('/search',[UserController::class, 'search']);






