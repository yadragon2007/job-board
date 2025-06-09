<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
  // return "Hello ,World!";
});

Route::get("/job", [JobController::class, "index"]);