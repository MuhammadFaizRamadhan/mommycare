<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignupController;

// Add this route to your existing routes

Route::get('/', function () {
    return view('home'); 
});

Route::get('/article', function () {
    return view('article'); 
});
Route::get('/about', function () {
    return view('about'); 
});
Route::get('/signup', function () {
    return view('signup'); 
});
Route::get('/login', function () {
    return view('login'); 
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/editprofile', function () {
    return view('editprofile');
});
Route::get('/olahraga', function () {
    return view('olahraga');
});
Route::get('/gejalakehamilan', function () {
    return view('gejalakehamilan');
});
Route::get('/merawatbayi', function () {
    return view('merawatbayi');
});
Route::get('/kalkulatorkehamilan', function () {
    return view('kalkulatorkehamilan');
});
Route::get('/trimester', function () {
    return view('trimester');
});
Route::get('/konsultasi-dokter', function () {
    return view('konsultasi_dokter');
});
Route::get('/chat-dokter', function () {
    return view('chat_dokter');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/updateprofile', [AuthController::class, 'updateProfile'])->name('profile.update');

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
