<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/addbooks', function () {
    return view('addbook');
});
Route::get('/delete/{id}', function ($id) {
    Book::find($id)->delete();
    return redirect('/');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/book/{id}',[BookController::class,'book']);

Route::post('/login',[UserController::class,'login']);
Route::post('/addbooks',[BookController::class,'createBook']);
Route::get('/',[BookController::class,'index']);


