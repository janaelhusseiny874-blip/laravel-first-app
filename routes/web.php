<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\helloController;

Route::get('/', function () {
    return view('welcome');
});

route::get("/hello",[helloController::class,"hello"]);
route::get("/posts",[helloController::class,"posts"]);
