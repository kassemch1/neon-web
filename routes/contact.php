<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/contact', [ContactController::class, 'showContactForm']);
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
