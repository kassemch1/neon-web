<?php
use App\Http\Controllers\SingleImageController;
use Illuminate\Support\Facades\Route;


Route::get('/slider/{id}', [SingleImageController::class, 'show'])->name('slider.show');
