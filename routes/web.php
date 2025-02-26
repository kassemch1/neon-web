<?php

use Illuminate\Support\Facades\Route;
use App\Models\BannerSlider;
require __DIR__. '/contact.php';
require __DIR__. '/admin.php';
require __DIR__. '/bannerSlider.php';
Route::get('/', function () {
    $banner = BannerSlider::first();
    return view('home',compact('banner'));
});
