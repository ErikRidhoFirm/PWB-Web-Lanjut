<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController; //menambahkan impor controller ke route
use App\Http\Controllers\PageController; //menambahkan impor controller ke route

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

Route::get('/', [PageController::class, 'welcome']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function() {
    return 'World';
});

Route::get('/welcome', function() {
    return 'Selamat Datang';
});

Route::get('/about', [PageController::class, 'about']);

Route::get('/user/{name}', function($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});