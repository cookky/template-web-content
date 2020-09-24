<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/show-blog', [HomeController::class, 'showBlog']);
Route::get('/tags', [HomeController::class, 'tag']);
