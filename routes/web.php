<?php

use Illuminate\Support\Facades\Route;

Route::get('/finance', function () {
    return view('home.finance');
});

Route::get('/disbursement', function(){
    return view('home.disbursement');
});

Route::get('/', function(){
    return view('home.login');
});

Route::get('/signup', function(){
    return view('home.signup');
});

