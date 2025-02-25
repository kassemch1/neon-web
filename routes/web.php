<?php

use Illuminate\Support\Facades\Route;
require __DIR__. '/contact.php';

Route::get('/', function () {
    return view('home');
});
