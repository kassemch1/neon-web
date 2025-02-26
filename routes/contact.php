<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
// Contact form submission route
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
