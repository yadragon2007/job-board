<?php

use App\Http\Controllers\IndexContoller;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexContoller::class, "index"]);
Route::get('/about', [IndexContoller::class, "about"]);
Route::get('/contact', [IndexContoller::class, "contact"]);

Route::get("/job", [JobController::class, "index"]);