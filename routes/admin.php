<?php

use App\Http\Controllers\admin_controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AdminController::class, 'loginView'])->name('login');
Route::post('/auth', [AdminController::class, 'authenticate'])->name('auth');


Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminController::class, 'admin_dashboard'])->name('admin');
    Route::get('/admin/contact', [AdminController::class, 'contacts_index'])->name('contacts.index');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

//Route::get('/admin', [AdminController::class, 'admin_dashboard'])->name('admin');
    Route::get('/admin/subscriber', [AdminController::class, 'subscribers_index'])->name('subscribers.index');
});
