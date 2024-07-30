<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('/login', function (){
   return view('admin.login');
})->name('login');
