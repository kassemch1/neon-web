<?php

use App\Http\Controllers\FaqsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('manageFaq')->group(function () {
    Route::get('/create',[FaqsController::class,'create'])->name('manageFaq.create');
    //store a new faq
    Route::post('/store',[FaqsController::class,'store'])->name('manageFaq.store');
    //list all existing faqs in a table
    Route::get('/',[FaqsController::class,'index'])->name('manageFaq.index');
    //Display form to edit an existing faq
    Route::get('/{id}/edit',[FaqsController::class,'edit'])->name('manageFaq.edit');
    //update an existing FAQ
    Route::put('/update',[FaqsController::class,'update'])->name('manageFaq.update');
    //Delete an faq
    Route::delete('/destroy',[FaqsController::class,'destroy'])->name('manageFaq.destroy');
});




