<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
require __DIR__. '/contact.php';
require __DIR__. '/admin.php';
require __DIR__. '/slider.php';
Route::get('/', [HomeController::class, 'index']);
