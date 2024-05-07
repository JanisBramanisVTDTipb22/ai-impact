<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get("/", function () {
    return view('index');
});

Route::get("/about", function () {
    return view('about');
});

Route::get("/nature", function () {
    return view('nature');
});

Route::get("/health", function () {
    return view('health');
});