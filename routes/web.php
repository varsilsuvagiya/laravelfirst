<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Namecontroller;
use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\Todo;


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

//! form
Route::view('/form','form');
Route::post('/submit', [Formcontroller::class, 'submit' ]);

//! route groups with prefix
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "This is admin dashboard";
    });
    Route::get('/users', function () {
        return "This is admin users";
    });
});

//! route groups with controller
Route::controller(Formcontroller::class)->group(function () {
    Route::get('/dashboard', function () {
        return "This is admin dashboard";
    });
    Route::get('/users', function () {
        return "This is admin users";
    });
});


//! API getting using http client
Route::get('/todo', [Todo::class, 'index']);
