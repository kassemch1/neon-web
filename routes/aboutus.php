<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/aboutus',[AboutUsController::class,'index'])->name('aboutus.index');
Route::get('/aboutus',[AboutUsController::class,'index_user'])->name('abouttt');
