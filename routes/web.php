<?php

use Illuminate\Support\Facades\Route;
require __DIR__. '/contact.php';
require __DIR__. '/admin.php';
require __DIR__. '/bannerSlider.php';
Route::get('/', function () {
    return view('home');
});
