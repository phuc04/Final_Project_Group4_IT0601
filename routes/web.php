<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login'); 
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/newarrival', function () {
    return view('newarrival');
});