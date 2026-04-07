<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisterController::class,'create']);
    Route::post('/register',[RegisterController::class,'store']);
    Route::get('/login',[LoginController::class,'create'])->name('login');
    Route::post('/login',[LoginController::class,'loginProcess']);
    // Route::get('/forget-password',[ForgetPasswordController::class,'create'])->name('forget-password');
    // Route::post('/forget-password',[ForgetPasswordController::class,'forgetProcess']);
    // Route::get('/reset-password',[ForgetPasswordController::class,'resetpassword']);
    // Route::put('/reset-password',[ForgetPasswordController::class,'verifyotp']);
});

Route::middleware('auth')->group(function(){
    Route::post('/logout',[LoginController::class,'logout']);
    Route::get('/dashboard',[DashboardController::class,'index']);

});
