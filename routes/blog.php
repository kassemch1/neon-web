<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/blog', [BlogController::class, 'showBlogForm'])->name('blog.form');
Route::post('/blog', [BlogController::class, 'submitForm'])->name('blog.submit');
