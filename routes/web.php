<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   return view('dashboard');
});
//Route::get('/login', function () {
    //return view('pages.auth.login');
//});
