<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::middleware(['auth'])->group(function () {


    Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');

});


