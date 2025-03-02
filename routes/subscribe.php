<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
