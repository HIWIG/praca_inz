<?php

use App\Http\Controllers\ChangeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\MyAuthController;
use App\Http\Controllers\FileController;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/logintest', function () {
    return view('logintest');
});
Route::get('/err', function () {
    return view('err');
});
Route::get('/main', function () {
    return view('main');
});

Route::get('/dashboard',[MyAuthController::class,'dashboard'])->middleware('isLoggedIn');

Route::get('/login',[MyAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::post('login-user',[MyAuthController::class,'loginUser'])->name('login-user');

Route::get('/registration',[MyAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[MyAuthController::class,'registerUser'])->name('register-user');

Route::get('/logout',[MyAuthController::class,'logout']);


Route::get('/addfile', [FileController::class,'create'])->name('addfile')->middleware('isLoggedIn');;
Route::get('/takefile', [FileController::class,'takefile'])->name('takefile')->middleware('isLoggedIn');;
//Route::post('/products', 'ProductController@store')->name('products.store');
//Route::get('/takefile',function (){
//    return view('takefile');
//});


//przed zmianą
//Route::get('/addfile',[FileController::class,'addfile']);
////////->middleware('alreadyLoggedIn');
Route::post('/add-file',[FileController::class,'store'])->name('add-file')->middleware('isLoggedIn');
Route::post('/take-file',[FileController::class,'takeFilePost'])->name('take-file')->middleware('isLoggedIn');


Route::get('/files',[FileController::class, 'show'])->name('show')->middleware('isLoggedIn');
Route::get('/changes',[ChangeController::class, 'show'])->middleware('isLoggedIn');

Route::get('/returnfile',[FileController::class, 'create2'])->name('returnfile')->middleware('isLoggedIn');
//Route::post("user",[UserAuth::class,'userLogin']);

//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('/login', 'Auth\LoginController@login');
