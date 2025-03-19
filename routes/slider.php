<?php


use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {


    Route::get('manageSlider', [SliderController::class, 'index'])->name('manageSlider.index');
    Route::get('/manageSlider/create', [SliderController::class, 'create'])->name('manageSlider.create');
    Route::post('/manageSlider/store', [SliderController::class, 'store'])->name('manageSlider.store');
    Route::get('manageSlider/{id}/edit', [SliderController::class, 'edit'])->name('manageSlider.edit');
    Route::put('manageSlider', [SliderController::class, 'update'])->name('manageSlider.update');
    Route::delete('/destroy', [SliderController::class, 'destroy'])->name('manageSlider.destroy');

});
