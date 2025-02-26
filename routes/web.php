<?php

use Illuminate\Support\Facades\Route;
require __DIR__. '/contact.php';
require __DIR__. '/admin.php';
Route::get('/', function () {
    return view('home');
});
