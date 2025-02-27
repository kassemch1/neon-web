<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
require __DIR__. '/bannerSlider.php';
require __DIR__. '/contact.php';
require __DIR__. '/admin.php';
require __DIR__. '/slider.php';
require __DIR__. '/subscribe.php';
require __DIR__. '/aboutus.php';

Route::get('/', [HomeController::class, 'index']);

