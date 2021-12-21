<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/admin',[AdminController::class,'index']);
Route::get('/home', [HomeController::class,'index']);
