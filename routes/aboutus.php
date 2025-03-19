<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;



Route::get('/about',[AboutUsController::class,'index_user'])->name('about');

Route::middleware(['auth'])->group(function () {


    Route::get('/admin/aboutus',[AboutUsController::class,'index'])->name('aboutus.index');

    Route::post('/admin/aboutus/update',[AboutUsController::class,'update'])->name('aboutus.update');
});
