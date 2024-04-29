<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get("/", [PostController::class, "index"]);
Route::get("/about/{id}", [PostController::class, "about"]);
Route::get("/nature", [PostController::class, "nature"]);
Route::post("/health", [PostController::class, "health"]);