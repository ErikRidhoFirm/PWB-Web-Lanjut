<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController; //menambahkan impor controller ke route
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
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function() {
    return 'World';
});

Route::get('/welcome', function() {
    return 'Selamat Datang';
});

Route::get('/about', function() {
    return 'Nama saya Erik Ridho Firmansyah, NIM : 2341720031';
});

Route::get('/user/{name}', function($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function($id){
    return 'Halaman Artikel dengan ID - '.$id;
});

Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});