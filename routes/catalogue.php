<?php

use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Route;



Route::get('/download-catalogue', [DownloadController::class, 'downloadCatalogue'])->name('download.catalogue');
