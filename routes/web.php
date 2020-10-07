<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

Route::get('sitemap', function () {
    SitemapGenerator::create('http://localhost/')->writeToFile('sitemap.xml');
    return "success";
});


Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/บทความทั้งหมด', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/{url}', [HomeController::class, 'showBlog'])->name('show-blog');
Route::get('/หมวดหมู่/{tag}', [HomeController::class, 'tag'])->name('tag');
