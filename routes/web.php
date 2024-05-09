<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"home"]);

Route::get('/about', [HomeController::class,"about"]);

Route::get('/login', [HomeController::class,"login"]);

Route::get('/testi', [HomeController::class,"testi"]);

Route::get('/con', [HomeController::class,"contact"]);
