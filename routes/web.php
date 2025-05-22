<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Namecontroller;

Route::get('/', function () {
    return view('welcome');
});

//! Route::view('home','home'); (you can write like this way also)
Route::get('/home', function () {
    return view('home');
});


Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/name/{user}', [Namecontroller::class, 'index' ]);
Route::get('/show', [Namecontroller::class, 'show' ]);

Route::view('/contact','contact.contact');
