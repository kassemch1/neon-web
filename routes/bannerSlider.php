<?php
use App\Http\Controllers\BannerSliderController;
use Illuminate\Support\Facades\Route;






Route::middleware(['auth'])->group(function () {


    Route::post('/banner-slider', [BannerSliderController::class, 'store'])->name('banner-slider.store');
    Route::put('/banner-slider/{id}', [BannerSliderController::class, 'update'])->name('banner-slider.update');

});
