<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/{url}', [HomeController::class, 'showBlog'])->name('show-blog');
Route::get('/หมวดหมู่/{tag}', [HomeController::class, 'tag'])->name('tag');
Route::get('/บทความทั้งหมด', [HomeController::class, 'blogs'])->name('blogs');
