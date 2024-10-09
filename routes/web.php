<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisteredController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserLoginController::class, 'login']);
Route::post('/login', [UserLoginController::class, 'create']);
Route::post('/logout',[UserLoginController::class, 'destroy']);


Route::get('/signup',[UserRegisteredController::class, 'signup']);
Route::post('/register', [UserRegisteredController::class, 'register']);


Route::get('/finance/dashboard', function () {
    return view('Dashboard.dashboard');
});


Route::get('/finance/AP', function(){
    return view('AP.index');
});

Route::get('/finance/AP/overview', function(){
    return view('AP.overview');
});


